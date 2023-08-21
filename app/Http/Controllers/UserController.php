<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() 
    {
        Toastr::success('login sucess.');
        return view('backend.page.login.login')->with('msg', 'Login success.');
    }
    public function doLogin(Request $request)
    {
        // dd($request->all());

        
       $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        // dd($request->all());
        // $credentials=$request->only(['email','password']);

        // if(auth()->attempt([$request->email,$request->password]))


        $credentials=$request->except(['_token']);
        // dd($credentials);
        if(Auth::attempt($credentials))
        {
            //true block

            return redirect()->route('dashboard');

        }else{
            //false block

            return redirect()->back();

        }

    }
     public function logout()
    {

        // auth()->logout();
        Auth::logout();

        Toastr::success('login sucess.');
        return redirect()->route('admin.login')->with('msg', 'Login success.');
    }

    public function profile()
    {
        return view('backend.page.profile.profile');
    }

}
