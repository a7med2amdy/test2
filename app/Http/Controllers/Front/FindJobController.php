<?php

namespace App\Http\Controllers\front;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FindJobController extends Controller
{
    public function findJop(Request $request){
        $query = Job::query();

    // Filter by keywords
    if ($request->filled('keywords')) {
        $query->where('name', 'like', '%' . $request->keywords . '%');
    }

    // Filter by location
    if ($request->filled('location')) {
        $query->where('location', 'like', '%' . $request->location . '%');
    }

    // Filter by category
    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    // Filter by job type
    if ($request->filled('job_type')) {
        $query->whereIn('job_type', $request->job_type);
    }

    // Filter by experience
    if ($request->filled('experience')) {
        $experience = $request->experience === '10+' ? 10 : $request->experience;
        $query->where('experience', '>=', $experience);
    }
        $jobs =Job::latest()->paginate(9);
        return view('front.find-jop',get_defined_vars());
    }
}
