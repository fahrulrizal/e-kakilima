<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PesanTempat;

use App\Biodata;

use App\Tempat;

class PesanTempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesantempat = PesanTempat::all();
        $biodata = Biodata::all();
        $tempat = Tempat::all();

        return view('admin.child.pesan_tempat.index')->with('pesantempat', $pesantempat)->with('biodata', $biodata)->with('tempat', $tempat);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesantempat = PesanTempat::all();
        $biodata = Biodata::all();
        $tempat = Tempat::all();
        return view('admin.child.pesan_tempat.create')->with('biodata', $biodata)->with('tempat', $tempat)->with('pesantempat', $pesantempat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'biodata_id' => 'required',
        //     'nama_lengkap' =>'required',
        //     'tempat_id' =>'requied',
        //     'harga' =>'required',
        //     'jumlah' => 'required',

        //    ]);
    
            // if ($validator->fails()) {
            //     return redirect(route('pesan_tempat.create'))->withErrors($validator)->withInput();
            // }
    
            $newpesantempat = new PesanTempat();
    
            $data = $request->all();
    
            $newpesantempat->fill($data);
    
             $sukses = $newpesantempat->save();
           
           if ($sukses) {
               return redirect('admin/pesan_tempat');
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
        $pesantempat = PesanTempat::find($id);
        $biodata = Biodata::all();
        $tempat = Tempat::all();
        return view('admin.child.pesan_tempat.edit', ['pesantempat' => $pesantempat] )->with('biodata', $biodata)->with('tempat', $tempat);
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
        $pesantempat = PesanTempat::find($id);

        $data = $request->all();

           $pesantempat->fill($data);

           $sukses = $pesantempat->save();

           if ($sukses) {
              return redirect('admin/pesan_tempat');
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
        $pesantempat = PesanTempat::find($id);
        $sukses = $pesantempat->delete();
 
        if ($sukses) {
            return redirect('admin/pesan_tempat');
        }
    }

    public function print($id)
    {
        $pesantempat = PesanTempat::find($id);
        return view('admin.child.pesan_tempat.print', ['pesantempat' => $pesantempat]);
    }
}
