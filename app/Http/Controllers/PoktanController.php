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
    


    public function pengajuan()
    {
        // return view('layouts.poktan.master_poktan');
        return view('poktan.pengajuan_kegiatan');
    }

    public function peminjaman()
    {
        return view('poktan.pengajuan_peminjaman');
    }

    public function cetakPengajuan()
    {
        return view('poktan.cetak_pengajuan');
    }

    public function cetakPeminjaman()
    {
        return view('poktan.cetak_peminjaman');
    }

    public function laporan()
    {
        return view('poktan.laporan');
    }
}
