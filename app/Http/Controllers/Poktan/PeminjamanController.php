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
        return view('poktan.peminjaman_alsintan');
    }

    public function cetakPeminjaman()
    {
        return view('poktan.cetak_peminjaman');
    }
}
