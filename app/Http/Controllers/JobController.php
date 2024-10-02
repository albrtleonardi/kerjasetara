<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index(Request $request)
{
    // Start a query to fetch jobs with associated companies
    $query = Job::with('company');

    // Keyword Search
    if (!empty($request->search)) {
        $search = $request->search;
        $query->where(function ($query) use ($search) {
            $query->where('job_title', 'like', '%' . $search . '%')
                  ->orWhereHas('company', function ($q) use ($search) {
                      $q->where('name', 'like', '%' . $search . '%');
                  });
        });
    }

    // Filter by Remote status
    if (!empty($request->remote)) {
        $query->where('remote', $request->remote == 'yes');
    }

    // Filter by Job Type
    if (!empty($request->job_type)) {
        $query->where('job_type', $request->job_type);
    }

    // Filter by Salary Range
    if (!empty($request->salary_range)) {
        $query->where('salary_range', $request->salary_range);
    }

    // Filter by Supported Disabilities
    if (!empty($request->disability)) {
        $query->where('disability_types_supported', 'like', '%' . $request->disability . '%');
    }

    // Get the filtered jobs
    $jobs = $query->get();

    // Return to the view with jobs and filter criteria
    return view('jobs.index', [
        'jobs' => $jobs,
        'remote' => $request->remote,
        'job_type' => $request->job_type,
        'salary_range' => $request->salary_range,
        'disability' => $request->disability,
        'search' => $request->search // Include search term in the view
    ]);
}

    


    public function show($id)
    {
        // Retrieve the job with its associated company by ID
        $job = Job::with('company')->findOrFail($id);

        // Return the job to the job detail view
        return view('jobs.show', compact('job'));
    }
}
