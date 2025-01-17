<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Project;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reports = Report::all();
        return view('reports.reports', ['reports'=>$reports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $org_id = Auth::user()->org->id;
        $projects = Project::where('org_id', $org_id)->get();
        // dd($projects);
        return view('reports.create', ['projects'=>$projects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $fields = $request->validate([
            'title'=>'required|max:120',
            'project_id'=>'required',
            'body'=>'required',
            'report_image'=>['required', 'file', 'max:3000', 'mimes:webp,jpg,png,jpeg']
        ]);

        if($request->hasFile('report_image')){
            $path = Storage::disk('public')->put('report_images', $request->report_image);
        }

        // dd($path);

        Report::create(['report_image'=>$path, ...$fields]);
        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
        return view('reports.edit', ['report'=>$report]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
