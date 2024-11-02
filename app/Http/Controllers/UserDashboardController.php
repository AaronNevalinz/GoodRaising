<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserDashboardController extends Controller
{
    //
    public function dashboard(){
        $org = Auth::user()->org;
        dd($org);
        // return view('dashboard', ['org'=>$org]);
    }
}
