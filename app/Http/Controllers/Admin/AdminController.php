<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $create_post = Permission::where('slug', 'create_post')->first();
////        $admin = Role::where('slug', 'admin')->first();
//        $user = User::find(3);
//        Auth::user() = User::find(3);
//        $user->roles()->sync($admin);
//        dd($user->permissions);
//        dd( $user->can($create_post));
//        dd($user->hasRole('admin'));
//        dd($user->hasRole('organizer'));
//        dd($user->giveRolesTo($admin));
//        dd($user->hasRole('organizer'));// вернёт false
//        dd($user->hasPermissionTo('create-post'));// вернёт true
//        dd($user->givePermissionsTo('create-post'));
//        dd($user->deletePermissions('create-post'));
//        dd($user->hasPermissionThroughRole('create-post'));
        return view('admin.layouts.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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
