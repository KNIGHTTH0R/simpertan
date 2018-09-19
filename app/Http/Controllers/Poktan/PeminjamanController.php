<?php

namespace App\Http\Controllers\Poktan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
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
        return view('poktan.peminjaman.index');
    }

    public function edit(Request $request)
    {
        return view('poktan.peminjaman.edit');
    }

    public function print()
    {
        return view('poktan.peminjaman._print');
    }
}
