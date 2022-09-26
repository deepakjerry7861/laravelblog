<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function admin_login(){
        return view('admin.sign-in');
    }
    public function loginvalidation(Request $request)
    {

        return($request);
    }
    public function sign_up()
    {
        return view('admin.sign-up');
    }

    public function registerdata_save(Request $request)
    {
        // return($request);die();
        $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5',
    ]);

        $user = new User ;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/admin/login')->with('status', 'Account 
        created Successfully   🥳!');

    }






}
