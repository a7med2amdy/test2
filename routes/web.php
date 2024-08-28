<?php

use App\Http\Controllers\front\FindJobController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MyProfileController;
use App\Http\Controllers\FrontAppliedJobs;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedJobsController;
use Illuminate\Support\Facades\Route;

//Home Page

Route::get('find-jop',[FindJobController::class,'findJop'])->name('front.findJop');

Route::name('front.')->controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    
    
    
   
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//my jobs
Route::controller(JobController::class)->middleware('auth')->group(function(){
    Route::resource('jobs',JobController::class);
    Route::post('/save-featured-job/{id}','store_featurd_job')->name('jobs.featured_job.store');
    Route::post('/store-applied-job/{id}','store_applied_job')->name('jobs.applied_job.store');
});

// Applied Jobs 
Route::controller(FrontAppliedJobs::class)->middleware('auth')->group(function(){
    Route::resource('appliedjobs',FrontAppliedJobs::class);
});

// Saved Jobs 
Route::controller(SavedJobsController::class)->middleware('auth')->group(function(){
    Route::resource('savedjobs',SavedJobsController::class);
    Route::post('/saved_job/{id}','store_job')->name('savedjobs.store_job');
});


Route::controller(MyProfileController::class)->middleware('auth')->group(function(){
    Route::resource('myprofile',MyProfileController::class);
});

require __DIR__.'/auth.php';
