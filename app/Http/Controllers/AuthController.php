<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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

    public function registerForm(){
        return view('register');
    }

    public function register(Request $request){
        $validate=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password']),
        ]);
        return redirect(route('login'))->with('message','Please sign in with your newly created account.');
    }
}
