<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Org;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        $orgs = Org::all();
        $totalOrgs = $orgs->count();
        $projects = Project::all();
        $totalProjects = $projects->count();
        return view('admin.dashboard', ['totalOrgs'=>$totalOrgs, 'totalProjects'=>$totalProjects]);
    }

    public function get_orgs(){
        $organizations = Org::all();
        // $org_id = Auth::user()->org->id;
        // $projects = Project::where('org_id', $org_id)->get();
        // $donations = Donation::where('org_id', $org_id);
        // $totalDonations = $donations->sum('amount');
        // $totalDonors = $donations->count();
        $donations = Donation::all();

        $orgDonations = [];
        foreach ($organizations as $org) {
            $orgDonations[$org->id] = $donations->where('org_id', $org->id)->sum('amount');
        }
        return view('admin.organizations', ['orgs'=>$organizations, 'donations'=>$donations]);
    }
}
