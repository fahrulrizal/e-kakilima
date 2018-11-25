<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PesanTempat;

class PrintPesanTempatController extends Controller
{
    public function print($id)
    {
        $print = PesanTempat::find($id);
        return view('admin.child.print.pesantempat', ['print' => $print]);
    }
}
