<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $org_id = Auth::user()->org->id;

        $projects = Project::where('org_id', $org_id)->get();
        return view('project-list', ['projects'=>$projects]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //validate
        return view('add-project');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $org_id = Auth::user()->org->id;
        //validate
        $fields = $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'goal'=>'required',
        ]);

        Project::create(["org_id"=>$org_id, ...$fields]);
        
        return redirect()->route('org.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
