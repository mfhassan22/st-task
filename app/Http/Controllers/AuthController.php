<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function show(){
        return view('login');
    }

    public function login(Request $request){
        $validate=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($validate)){
            return redirect(route('dashboard'));
        }
        return redirect()->back()->withErrors(['email'=>'Invalid Credentials']);
    }

    public function logout(){
        auth()->logout();
        return redirect(route('login'));
    }
}
