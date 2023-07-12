<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $barangnyh= \DB::table('t_barang_nyh')->get();
        $data = array('barangnyh' => $barangnyh);
        return view ('barangnyh/index', $data);
    }
}
