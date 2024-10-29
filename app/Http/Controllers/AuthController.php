<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);

        $user = User::create($fields);

        return redirect()->route('dashboard');
    }
    //
    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($fields)){
            return redirect()->route('home');
        }
    }
    //
    public function logout(Request $request){
        Auth::login();

        // invalidate the user
        $request->session->invalidate();
        // regenrate csrf token
        $request->session->regenerateToken();
        // redirect home
        return redirect()->route('home');

    }
}
