<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() 
    {
        return view('backend.page.login.login');
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

        return redirect()->route('admin.login');
    }

    public function profile()
    {
        return view('backend.page.profile.profile');
    }

}
