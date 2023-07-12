<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranitemnyh= \DB::table('t_pengeluaranitem_nyh')->get();
        $data = array('pengeluaranitemnyh' => $pengeluaranitemnyh);
        return view ('pengeluaranitemnyh/index', $data);
    }
}
