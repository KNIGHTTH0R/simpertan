<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
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
                     // ->where(function($query){
                     //        $query->where('role_user.role_id', 2)
                     //              ->orWhere('role_user.role_id', 4);
                     //    })
                     ->where('role_user.role_id', 2)
                     ->orWhere('role_user.role_id', 4)
                     ->select('users.id', 'users.name as userName', 'users.email', 'roles.name as roleName', 'users.created_at')
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
        //
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
        $role_user = DB::table('role_user')->where('user_id', $id)->first();
        $role = $role_user->role_id;
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        $role = Role::find($role);
        $role->name = $request->role;
        $role->update();

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
        //
    }
}
