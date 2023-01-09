<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'     => 'Rizal WebDev | Admin User',
            'users'     => User::all()
        ];

        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'     => 'Rizal WebDev | Admin Create User'
        ];

        return view('admin.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'username'  => 'required|unique:users,username',
            'password'  => 'required',
            'avatar'    => 'image|file|max:2048'
        ]);

        if($request->file('avatar'))
        {
            $avatar = $request->file('avatar')->store('img_user');
            $validatedData['avatar'] = $avatar;
        }

        // hash password
        $validatedData['password'] = password_hash($request->password, PASSWORD_DEFAULT);
        $validatedData['role_id'] = 1;

        User::create($validatedData);

        return to_route('admin.user.index')->with('toast_success', 'New user has been aded!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data = [
            'title'     => 'Rizal WebDev | Admin Edit User',
            'user'      => $user
        ];

        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'username'      => 'required',
            'email'         => 'required',
            'name'          => 'required',
            'gambar'        => 'image|file|max:2048'
        ];

        //cek apakah email diganti
        if($request->email != $user->email)
        {
            // kalau diganti rules email di tambah
            $rules['email'] = 'required|unique:users,email';
        }

        // validasi data
        $validatedData = $request->validate($rules);

        //cek password
        if(!empty($request->password)){
            $validatedData['password'] = password_hash($request->password, PASSWORD_DEFAULT);
        } else{
            $validatedData['password'] = $user->password;
        }

        if($request->file('avatar'))
        {
            $avatar = $request->file('avatar')->store('img_user');

            if(!empty($user->avatar)) {
                Storage::delete($user->avatar);
            }
            
            $validatedData['avatar'] = $avatar;
        } else {
            $validatedData['avatar'] = $user->avatar;
        }

        User::where('username', $user->username)->update($validatedData);
        return to_route('admin.user.index')->with('toast_success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // User::where('username', $user->username)->delete();
        // return to_route('admin.user.index')->with('toast_success', 'User has been deleted!');
    }
}
