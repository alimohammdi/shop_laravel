<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(3);
        return view('dashboard.user.index',compact('users',));
    }


    public function create()
    {
        return view('dashboard.user.addUser');
    }

    public function store(CreateUsersRequest $request)
    {
        $pass = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $pass
        ]);
          session()->flash('create-user-success','کاربر با موفقیت اضافه شد');
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::FindOrFail($id)->first();
        return view('dashboard.user.showUser',compact('user'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::destroy($id);
        session()->flash('delete-user-success','کاربر با موفقیت حذف شد');
        return back();
    }
}
