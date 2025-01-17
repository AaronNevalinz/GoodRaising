<?php

namespace App\Http\Controllers;

use App\Models\Org;
use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    //
    public function index(){
        $projects = Project::all();
        $org = Project::first()->org;

        return view('projects', ['projects'=>$projects, 'org'=>$org]);
    }

    public function index_page(Project $project){
        $projects = Project::latest()->take(4)->get();
        $first_project = Project::first();
        return view('index', ['projects'=>$projects, 'first_project'=> $first_project]);
    }
}
