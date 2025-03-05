<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     *
     */
    public function signin(Request $request){
        $creadentilas = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($creadentilas)){
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with('error','Invalid Account');
        }
    }
    /**
     *
     */
    public function signup(Request $request){
        $creadentilas = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role_id' => 'required'
        ]);
        if($creadentilas){
            // if(User::where('email','=',$request->email)){
            //     return redirect()->route('register')->with('error','Account all ready exists');
            // }else{
            //     $user = User::create($creadentilas);
            //     Auth::login($user);
            //     return redirect()->route('home');
            // }
            $user = User::create($creadentilas);
            Auth::login($user);
            return redirect()->route('home');
        }
    }
    public function  logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
