<?php

namespace App\Http\Controllers\Poktan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
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
        return view('poktan.pengajuan.index');
    }

    public function edit(Request $request)
    {
        return view('poktan.pengajuan.edit');
    }

    public function print()
    {
        return view('poktan.pengajuan._print');
    }
}
