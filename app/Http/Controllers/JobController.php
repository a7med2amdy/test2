<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\AppliedJobs;
use App\Models\Company;
use App\Models\FeaturedJob;
use App\Models\JobType;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $jobs =   Job::where('user_id',Auth::user()->id)->paginate(6);
        return view('front.jobs.my-jobs',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $jobs_types = JobType::all();
        return view('front.jobs.post-job',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        
        $data = $request->validated();

        
        $category2 = Category::where('name', $data['category'])->first();
        $category_id = $category2->id;

        $job_type = JobType::where('name', $data['job_nature'])->first();
        if (!$job_type) {
            // Handle case where job type doesn't exist
            return redirect()->back()->with('error', 'Job type not found.');
        }
        $job_type_id = $job_type->id;
        
        
        
        
       

        Job::create([
            'name'=>$data['name'],
            'job_type_id' => $job_type_id ,
            'vacancy'=>$data['vacancy'],
            'salary' =>$data['salary'],
            'location' =>$data['location'],
            'description' =>$data['description'],
            'benefits' =>$data['benefits'],
            'responsibility' =>$data['responsibility'],
            'qualifications'=>$data['qualifications'],
            'keywords' =>$data['keywords'],
            

            'user_id'=>Auth::user()->id,
            'category_id'=>$category_id ,
            'company_name'=>$data['company_name'],
            'company_location'=>$data['company_location'],
            'company_website'=>$data['company_website'],

        ]);

        

        return to_route('jobs.create')->with('create-job-status','job created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('front.jobs.job-detail',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return to_route('jobs.index');
    }

    public function store_featurd_job($id){
        $job_id = $id ;
        $data = new FeaturedJob ;
        $data->job_id = $job_id ; 
        $data->user_id = Auth::user()->id ;
        $data->save();
        return to_route('jobs.index');
    }

    public function store_applied_job($id){
        $job_id = $id ;
        $data = new AppliedJobs ;
        $data->job_id = $job_id ; 
        $data->user_id = Auth::user()->id ;
        $data->save();
        return to_route('jobs.index');
    }
}
