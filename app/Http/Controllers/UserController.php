<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        # code...
        $auth = Auth::user();
        $user = User::orderByDesc('id')->get();
        return view('user.index',compact(['user','auth']));
    }
    public function delete($id)
    {
        # code...

        $user = User::where('id' , $id)->first();
        $user->delete();
        return view('user');
    }
    public function update($id)
    {
        # code...
        $user = User::where('id' , $id)->first();
        return view('user.update',compact('user'));
    }
    public function edit(StoreUserRequest $request , $id )
    {
        # code...
        // return "mohammed";
        $user = User::where('id' , $id)->first();
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
        ]);
        return redirect('user');
    }


}
