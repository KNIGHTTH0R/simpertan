<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoktanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('layouts.poktan.master_poktan');
        return view('poktan.pengajuan_kegiatan');
    }
}
