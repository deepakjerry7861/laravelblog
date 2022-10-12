<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use DB;
use Redirect;
use Session;

class AuthController extends Controller
{
    public function admin_login(Request $request){
       
        return view('admin.sign-in');

    }

    

public function loginvalidation(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;      

         if(Auth::attempt(['email' => $email, 'password' => $password,'status'=>'1','user_type'=>'admin']))

         {
            return redirect()->intended('admin')
                        ->withSuccess('You have Successfully loggedin');
         }





         
  
         return redirect()->back()->with('message', 'Opps! You have entered invalid credentials');
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
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/admin/login')->with('status', 'Account 
        created Successfully   🥳!');

    }

   public function logout(Request $request)
{
    Auth::logout();
    Session::flush();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    // return redirect('admin/login');
     return Redirect::back()->with('message','admin/login');

}





}
