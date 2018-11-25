<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tempat;

use App\PesanTempat;

class WebController extends Controller
{
    public function index()
    {
        $tempat = Tempat::all();
        $pesantempat = PesanTempat::all();
    	return view('web.child.home')->with('tempat', $tempat)->with('pesantempat', $pesantempat);
    }
}
