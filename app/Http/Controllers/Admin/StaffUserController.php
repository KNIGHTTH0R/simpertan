<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class StaffUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
                     ->join('role_user', 'role_user.user_id', 'users.id')
                     ->join('roles', 'roles.id', 'role_user.role_id')
                     ->where('role_user.role_id', 2)
                     ->orWhere('role_user.role_id', 4)
                     ->select('users.id', 'users.name as userName', 'users.email', 'roles.name as roleName', 'users.created_at')
                     ->where('is_active', 1)
                     ->orderBy('users.name')
                     ->get();

        // print_r($users);
        return view('admin.staffuser.index', [
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
        return view('admin.staffuser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->password <> $request->confirm_password) {
            return redirect()->back()->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_active = 1;
        $user->save();

        DB::table('role_user')->insert([
            ['role_id' => $request->role, 'user_id' => $user->id]
        ]);

        return redirect('admin/admin_staffuser')->with('status', 'User berhasil ditambah');
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
                     ->join('role_user', 'role_user.user_id', 'users.id')
                     ->join('roles', 'roles.id', 'role_user.role_id')
                     ->where('users.id', $id)
                     ->select('users.id', 'users.name as userName', 'users.email', 'roles.name as roleName', 'users.created_at')
                     ->first();

        // print_r($users);
        return view('admin.staffuser.edit', [
            'user' => $user
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

        DB::table('role_user')
            ->where('user_id', $id)
            ->update(['role_id' => $request->role]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->ganti_password) {
           $user->password = Hash::make($request->new_password);
        }
        $user->update();

        return redirect('admin/admin_staffuser')->with('status', 'User berhasil diubah');
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

        return redirect('admin/admin_staffuser')->with('status', 'User berhasil dihapus');
    }
}
