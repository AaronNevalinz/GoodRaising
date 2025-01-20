<?php

namespace App\Http\Controllers;

use App\Models\Org;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $org = Org::where('id', $org_id)->first();
        // dd($org);
        return view('project.project-list', ['projects'=>$projects, 'org'=> $org]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //validate
        return view('project.add-project');

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
            'project_location'=>'required',
            'funding_goal'=>'required',
            'project_summary'=>'required',
            'theme'=>'required',
            'cover_image'=>['required', 'file', 'max:3000', 'mimes:webp,jpg,png,jpeg']
        ]);
        $path = null;
        // Store image if it exists
        if($request->hasFile('cover_image')){
            $path = Storage::disk('public')->put('project_images', $request->cover_image);
        }
        
        Project::create(["org_id"=>$org_id, "cover_img"=>$path, ...$fields]);
        
        return redirect()->route('project.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view('project.single-project', ['project'=>$project]);
        // return response()->json([
        //     'view' => view('project.single-project', ['project' => $project])->render(),
        //     'project' => $project,
        // ]);
        
    }

    public function billing(Project $project){
        return view('billing', ['project'=>$project]);
        // return response()->json([
        //     'view' => view('billing', ['project' => $project])->render(),
        //     'project' => $project,
        // ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return view('project.edit', ['project'=>$project]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $fields = $request->validate([
            'title' =>'max:120',
            'theme'=>'required',
            'funding_goal' => 'required',
            'project_summary' => 'required',
            'cover_image'
        ]);

        $project->update($fields);

        return redirect()->route('project.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
