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
    

    public function pengajuan()
    {
        // return view('layouts.poktan.master_poktan');
        return view('poktan.pengajuan_kegiatan');
    }

    public function cetakPengajuan()
    {
        return view('poktan.cetak_pengajuan');
    }
}
