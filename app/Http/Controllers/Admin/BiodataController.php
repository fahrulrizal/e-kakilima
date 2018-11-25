<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view('admin.child.biodata.index')->with('biodata', $biodata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = Biodata::all();
        return view('admin.child.biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
        'no_ktp' => 'required|string|max:16',
        'nama_lengkap' => 'required|string|max:50',
        'tempat_lahir'=> 'required|string|max:30',
        'tanggal_lahir'=>'required|date',
        'kewarganegaraan' => 'required|string|in:WNI,WNA',
        'agama' => 'required|string|in:ISLAM,KATOLIK,PROTESTAN,BUDDHA,LAINNYA',
        'nama_ayah'=>'required|string|',
        'nama_ibu'=>'required|string|',
        'foto'=>'image',

       ]);

        if ($validator->fails()) {
            return redirect(route('biodata.create'))->withErrors($validator)->withInput();
        }

        $newbiodata = new Biodata();

        $data = $request->all();

        $newbiodata->fill($data);

     if ($request->hasFile('foto')) {
         $path = $request->foto->store('public/upload');
         list($tmp, $filename) = explode('public/', $path);
         $newbiodata->foto = $filename;
     }

      $sukses = $newbiodata->save();
       
       if ($sukses) {
           return redirect('admin/biodata');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('Admin.child.biodata.edit', ['biodata' => $biodata] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $biodata = Biodata::find($id);

        $data = $request->all();

           $biodata->fill($data);

            if($request->hasFile('foto')) {

                $path = $request->foto->store('public/uploads');
                list($tmp, $filename) = explode('public/', $path);
                $biodata->foto = $filename;

            }


           $sukses = $biodata->save();

           if ($sukses) {
              return redirect('admin/biodata');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);

       $sukses = $biodata->delete();
       if ($sukses) {
           return redirect('admin/biodata');
       }
    }
}
