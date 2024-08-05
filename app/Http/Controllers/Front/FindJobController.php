<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindJobController extends Controller
{
    public function findJop(){
        return view('front.find-jop');
    }
}
