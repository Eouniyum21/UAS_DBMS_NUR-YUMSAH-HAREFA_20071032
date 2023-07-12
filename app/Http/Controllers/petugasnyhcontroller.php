<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $petugasnyh= \DB::table('t_pentugas_nyh')->get();
        $data = array('petugasnyh' => $petugasnyh);
        return view ('petugasnyh/index', $data);
    }
}
