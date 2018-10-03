<?php

namespace App\Http\Controllers\Poktan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AlsintanUsulan;
use App\Usulan;

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
        $jenis = AlsintanUsulan::select('nama')
          ->distinct()
          ->get();

        return view('poktan.pengajuan.index', compact(
          'jenis'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'nama' => 'required',
        'merk' => 'required',
        'jumlah' => 'required',
        'satuan' => 'required',
      ]);
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
