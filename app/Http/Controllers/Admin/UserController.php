<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id','!=',Auth::user()->id)->get();
        return view('admin.users.user',compact('users'));
    }
    public function update_type($id)
    {
        $user = User::find($id);
        return view('admin.users.update',compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->userType = $request->userType;
        $user->save();
        return redirect('admin/all-user');
    }
}
