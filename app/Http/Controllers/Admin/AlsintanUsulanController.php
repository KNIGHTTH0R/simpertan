<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AlsintanUsulan;

class AlsintanUsulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {

    }


    public function index()
    {
        $alsintan_usulan = AlsintanUsulan::orderBy('nama')->get();
        return view('admin.alsintanusulan.index', [
            'alsintan_usulan' => $alsintan_usulan,
            'count' => 1
        ]);
    }

    public function lookupMerkByJenis(Request $request)
    {
      $merk = AlsintanUsulan::where('nama', 'like', '%'. $request->input('q'). '%')
          ->select('merk as merk')
          ->get();

      $result = [
        'total_count' => count($merk),
        'items' => $merk
      ];

      return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alsintanusulan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alsintan = new AlsintanUsulan();
        $alsintan->nama = $request->nama;
        $alsintan->merk = $request->merk;
        $alsintan->jumlah = $request->jumlah;
        $alsintan->tahun = $request->tahun;
        $alsintan->sumber = $request->sumber;
        $alsintan->save();

        return redirect('admin/admin_alsintanusulan')->with('status', 'Alsintan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alsintan = AlsintanUsulan::where('id', $id)->first();
        return view('admin.alsintanusulan.edit', [
            'alsintan' => $alsintan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alsintan = AlsintanUsulan::find($id);
        $alsintan->nama = $request->nama;
        $alsintan->merk = $request->merk;
        $alsintan->jumlah = $request->jumlah;
        $alsintan->tahun = $request->tahun;
        $alsintan->sumber = $request->sumber;
        $alsintan->update();

        return redirect('admin/admin_alsintanusulan')->with('status', 'Alsintan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AlsintanUsulan::where('id', $id)->delete();
        
        return redirect()->back()->with('status', 'Alsintan Berhasil dihapus');
    }   
}
