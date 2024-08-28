<?php

namespace App\Http\Controllers;
use App\Models\Saved_Job;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSavedJobRequest;
use Illuminate\Support\Facades\Auth;

class SavedJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $saved_jobs = Saved_Job::where('user_id',Auth::user()->id)->paginate(10) ;
        
        return view('front.jobs.saved-jobs',get_defined_vars());
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
    public function store(Request $request)
    {
       
    
    }
    public function store_job($id)
    {
        $job_id= $id ;             
        $data = new Saved_Job ;       
        $data->job_id = $job_id ; 
        $data->save();
        return to_route('jobs.index');
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saved_Job $saved_Job)
    {
        $saved_Job->delete();
        return to_route('savedjobs.index');
    }
}
