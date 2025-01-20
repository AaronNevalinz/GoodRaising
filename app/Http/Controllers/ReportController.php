<?php

namespace App\Http\Controllers;
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
    // public function store(Request $request)
    // {

    //     //
    //     $fields = $request->validate([
    //         'title'=>'required|max:120',
    //         'project_id'=>'required',
    //         'body'=>'required',
    //         'report_image'=>['required', 'file', 'max:3000', 'mimes:webp,jpg,png,jpeg']
    //     ]);
    //     $path = null;

    //     if($request->hasFile('report_image')){
    //         $path = Storage::disk('public')->put('report_images', $request->report_image);
    //     }

    //         // Save the content or do further processing
    //     $report = new Report();
    //     $report->body = $request->input('body');

    //     // dd($path);

    //     Report::create(["report_image"=>$path, "body"=>$report->body, ...$fields]);
    //     return redirect()->route('report.index');
    // }

    public function store(Request $request){

        // Validate the request data
        $fields = $request->validate([
            'title' => 'required|max:120',
            'project_id' => 'required',
            'body' => 'required',
            'report_image' => ['required', 'file', 'max:3000', 'mimes:webp,jpg,png,jpeg'],
        ]);

        $path = null;
        
        // Check if a file was uploaded and store it
        if ($request->hasFile('report_image')) {
            // Store image if it exists
            if($request->hasFile('report_image')){
                $path = Storage::disk('public')->put('trial_images', $request->report_image);
            }
        }

        // Save the content or do further processing
        $report = new Report();
        $report->body = $request->input('body');
        
        
        Report::create([
            "title" => $fields['title'],
            "project_id" => $fields['project_id'],
            "body" => $report->body,
            "report_image" => $path,
        ]);
        // dd($path);
        return redirect()->route('report.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
        return view('reports.view', ['report' => $report]);
        
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
    public function update(Request $request, Report $report)
    {
        //
        // dd('ok');
        $fields = $request->validate([
            'title' => 'required|max:120',
            // 'project_id' => 'required',
            'body' => 'required',
            'report_image' => ['nullable', 'file', 'max:3000', 'mimes:webp,jpg,png,jpeg'],
        ]);

        // dd($fields);

        

        if ($request->hasFile('report_image')) {
            // Delete the old image if it exists
            if ($report->report_image) {
                Storage::disk('public')->delete($report->report_image);
            }
            // Store the new image
            $path = Storage::disk('public')->put('report_images', $request->report_image);
            $fields['report_image'] = $path;
        }

        // Update the report with the validated data
        $report->update($fields);

        return redirect()->route('report.index')->with('success', 'Report updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
        $report->delete();
        return redirect()->route('report.index')->with('success', 'Report deleted successfully');
    }
}
