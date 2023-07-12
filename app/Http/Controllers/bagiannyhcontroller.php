<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $bagiannyh= \DB::table('t_bagian_nyh')->get();
        $data = array('bagiannyh' => $bagiannyh);
        return view ('bagiannyh/index', $data);
    }
}
