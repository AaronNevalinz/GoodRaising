<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserDashboardController extends Controller
{
    //
    public function get_org_details(){
        $org = Auth::user()->org;
        // dd($org);
        return view('org', ['org'=>$org]);
    }
}
