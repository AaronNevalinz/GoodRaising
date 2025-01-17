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

        Auth::login($user);

        return redirect()->route('home');
    }
    //
    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|email|exists:users',
            'password'=>'required'
        ]);



        if(Auth::attempt($fields)){
            $user = Auth::user();
            if($user->is_admin){
                return redirect()->route('admin.index');
            }
            return redirect()->route('home');
        }
    }
    //
    public function logout(Request $request){

        Auth::logout();

        // invalidate the user
        $request->session()->invalidate();
        // regenrate csrf token
        $request->session()->regenerateToken();
        // redirect home
        return redirect()->route('home');

    }
}
