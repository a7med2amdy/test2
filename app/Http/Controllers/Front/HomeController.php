<?php

namespace App\Http\Controllers\Front;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeaturedJob;

class HomeController extends Controller
{
    public function index(){
        $featured_jobs = FeaturedJob::all(); 
        $jobs =Job::latest()->paginate(9);
        
        return view('front.index',get_defined_vars());
    }

    


}
