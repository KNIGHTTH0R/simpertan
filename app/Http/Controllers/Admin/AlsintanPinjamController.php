<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AlsintanPinjam;

class AlsintanPinjamController extends Controller
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
        $alsintan_pinjam = AlsintanPinjam::orderBy('nama')->get();
        return view('admin.alsintanpinjam.index', [
            'alsintan_pinjam' => $alsintan_pinjam,
            'count' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alsintanpinjam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alsintan = new AlsintanPinjam();
        $alsintan->nama = $request->nama;
        $alsintan->merk = $request->merk;
        $alsintan->jumlah = $request->jumlah;
        $alsintan->tahun = $request->tahun;
        $alsintan->sumber = $request->sumber;
        $alsintan->save();

        return redirect('admin/admin_alsintanpinjam')->with('status', 'Alsintan berhasil ditambahkan');
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
        $alsintan = AlsintanPinjam::where('id', $id)->first();
        return view('admin.alsintanpinjam.edit', [
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
        $alsintan = AlsintanPinjam::find($id);
        $alsintan->nama = $request->nama;
        $alsintan->merk = $request->merk;
        $alsintan->jumlah = $request->jumlah;
        $alsintan->tahun = $request->tahun;
        $alsintan->sumber = $request->sumber;
        $alsintan->update();

        return redirect('admin/admin_alsintanpinjam')->with('status', 'Alsintan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AlsintanPinjam::where('id', $id)->delete();
        
        return redirect()->back()->with('status', 'Alsintan Berhasil dihapus');
    }
}
