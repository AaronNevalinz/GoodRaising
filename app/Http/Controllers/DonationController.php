<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $org_id = Auth::user()->org->id;
        $donations = Donation::where('org_id', $org_id)->get();

        $totalDonations = $donations->sum('amount');

        return view('donations', ['donations'=>$donations, 'totalDonations' =>$totalDonations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $fields = $request->validate([
            'amount' => 'string',
            'full_name' => 'string',
            'email' => 'string', 
            'phone' => 'string',

        ]);

        Donation::create([...$fields, 'project_title' => $project->title, 'org_id'=>$project->org_id]);

        return redirect()->route('home')->with('success', 'Donation created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
