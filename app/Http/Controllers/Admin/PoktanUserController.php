<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Poktan;
use App\User;
use App\Kecamatan;
use App\Desa;

class PoktanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::whereNotNull('poktan_id')->get();
        
        $users = DB::table('users')
                  ->join('poktan', 'poktan.id', 'users.poktan_id')
                  ->join('kecamatan', 'kecamatan.id', 'poktan.kecamatan_id')
                  ->join('desa', 'desa.id', 'poktan.desa_id')
                  ->whereNotNull('users.poktan_id')
                  ->select('users.id', 'poktan.nama', 'users.email', 'kecamatan.nama as nama_kecamatan', 'desa.nama as nama_desa')
                  ->where('users.is_active', 1)
                  ->get();

        return view('admin.poktanuser.index', [
            'users' => $users,
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
        $kecamatan = DB::table('kecamatan')->orderBy('nama')->get();
        $desa = DB::table('desa')->orderBy('nama')->get();

        return view('admin.poktanuser.create', [
            'desa' => $desa,
            'kecamatan' => $kecamatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->password <> $request->confirm_password) {
            return redirect()->back()->withInput()->with('status', 'Password konfirmasi tidak sama');
        }

        $poktan = DB::table('poktan')->insert([
            [
                'nama' => $request->poktanName,
                'telp' => $request->telp,
                'kecamatan_id' => $request->kecamatan,
                'desa_id' => $request->desa
            ]
        ]);

        $user = new User();
        $user->name = $request->userName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->poktan_id = DB::getPdo()->lastInsertId();
        $user->is_active = 1;
        $user->save();

        return redirect('admin/admin_poktanuser')->with('status', 'User berhasil dibuat');
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
        $user = DB::table('users')
                  ->join('poktan', 'poktan.id', 'users.poktan_id')
                  ->join('kecamatan', 'kecamatan.id', 'poktan.kecamatan_id')
                  ->join('desa', 'desa.id', 'poktan.desa_id')
                  ->whereNotNull('users.poktan_id')
                  ->where('users.id', $id)
                  ->select(
                    'users.id',
                    'users.name as namaUser', 
                    'poktan.nama as namaPoktan', 
                    'poktan.telp',
                    'users.email',
                    'kecamatan.nama as kecamatan', 
                    'desa.nama as desa')
                  ->first();

        $kecamatan = DB::table('kecamatan')->orderBy('nama')->get();
        $desa = DB::table('desa')->orderBy('nama')->get();

        return view('admin.poktanuser.edit', [
            'user' => $user,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'count' => 1
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
        if ($request->ganti_password) {
            if ($request->new_password <> $request->confirm_password) {
                return redirect()->back()->withInput()->with('status', 'Password konfirmasi tidak sama');
            }
        }

        $user = User::find($id);
        $user->name = $request->userName;
        $user->email = $request->email;
        if ($request->ganti_password) {
           $user->password = Hash::make($request->new_password);
        }
        $user->update();

        $poktan = DB::table('poktan')
            ->where('id', $user->poktan_id)
            ->update([
                'nama' => $request->poktanName,
                'telp' => $request->telp,
                'kecamatan_id' => $request->kecamatan,
                'desa_id' => $request->desa
            ]);

        return redirect('admin/admin_poktanuser')->with('status', 'User berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->is_active = 0;
        $user->update();

        return redirect('admin/admin_poktanuser')->with('status', 'User berhasil dihapus');
    }
}
