<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Org;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $org_id = Auth::user()->org->id;
        $projects = Project::where('org_id', $org_id)->get();
        $donations = Donation::where('org_id', $org_id);
        $totalDonations = $donations->sum('amount');
        $totalDonors = $donations->count();
        $org = Auth::user()->org;
        // dd($org);
        return view('dashboard', ['org'=>$org, 'projects'=>$projects, 'totalDonations'=>$totalDonations, 'totalDonors'=>$totalDonors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //validate
        $fields = $request->validate([
            'name'=>'required|unique:orgs',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'postal_code'=>'required',
            'location'=>'required',
            'phone'=>'required',
            'programs'=>'required',
            'mission'=>'required',
            'awards_reg'=>'required',
            'religious_affiliation'=>'required',
            'director_name'=>'required',
            'title'=>'required',
            'scope'=>'required',
            'employees'=>'required',
            'volunteers'=>'required',
            'year_founded'=>'required',
        ]);
        
        Auth::user()->org()->create($fields);

        return redirect()->route('organization');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Org $org)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Org $org)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Org $org)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Org $org)
    {
        //
    }
}
