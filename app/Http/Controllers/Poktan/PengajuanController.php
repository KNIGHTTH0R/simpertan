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
      $user = auth()->user();

      // $this->validate($request, [
      //   'jenis_alsintan' => 'required',
      //   'merk_alsintan' => 'required',
      //   'jumlah' => 'required',
      //   'satuan' => 'required',
      // ]);

      $usulan = new Usulan();
      $usulan->poktan_id = $user->poktan_id;
      $alsintan_usulan_id = AlsintanUsulan::select('id')
                                  ->where('nama', '=', $request->input('jenis_alsintan'))
                                  ->where('merk', '=', $request->input('merk_alsintan'))
                                  ->first();
      $usulan->alsintan_usulan_id = $alsintan_usulan_id->id;
      $usulan->jumlah = $request->input('jumlah');
      $usulan->catatan= '';
      $usulan->is_approved = '0';
      $usulan->save();

      return redirect('poktan/poktan_dashboard')->with('status', 'Pengajuan berhasil ditambahkan');

    }

    public function edit(Request $request)
    {
        return view('poktan.pengajuan.edit');
    }

    public function print()
    {
        return view('poktan.pengajuan._print');
    }

    public function getMerk(Request $request)
    {
      $merk = AlsintanUsulan::select('merk')
      ->where('nama', '=', $request->input('jenis'))->get();
      return response()->json($merk);
    }
}
