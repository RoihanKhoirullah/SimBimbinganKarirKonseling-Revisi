<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $var_nama = "Roihan Khoirullah";
        return view('admin.beranda', compact('var_nama'));
    }

}
