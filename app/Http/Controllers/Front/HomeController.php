<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.index',get_defined_vars());
    }

    public function myJobs(){
        return view('front.jobs.my-jobs',get_defined_vars());
    }


}
