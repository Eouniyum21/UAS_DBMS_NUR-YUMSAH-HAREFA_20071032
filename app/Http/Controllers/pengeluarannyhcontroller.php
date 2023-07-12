<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluarannyh= \DB::table('t_pengeluaran_nyh')->get();
        $data = array('pengeluarannyh' => $pengeluarannyh);
        return view ('pengeluarannyh/index', $data);
    }
}
