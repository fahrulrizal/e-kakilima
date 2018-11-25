<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Tempat;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tempat = Tempat::all();
        return view('admin.child.tempat.index')->with('tempat', $tempat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tempat = Tempat::all();
        return view('admin.child.tempat.create');
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
            'kode_tempat' => 'required|string',
           ]);
    
            if ($validator->fails()) {
                return redirect(route('tempat.create'))->withErrors($validator)->withInput();
            }
    
            $newtempat = new Tempat();
    
            $data = $request->all();
    
            $newtempat->fill($data);
    
             $sukses = $newtempat->save();
           
           if ($sukses) {
               return redirect('admin/tempat');
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
        $tempat = Tempat::find($id);
        return view('Admin.child.tempat.edit', ['tempat' => $tempat] );
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
        $tempat = Tempat::find($id);

        $data = $request->all();

           $tempat->fill($data);

           $sukses = $tempat->save();

           if ($sukses) {
              return redirect('admin/tempat');
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
        $tempat = Tempat::find($id);

       $sukses = $tempat->delete();

       if ($sukses) {
           return redirect('admin/tempat');
       }
    }
}
