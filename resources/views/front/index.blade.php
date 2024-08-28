@extends('front.master')
@section('title','Home')

@section('hero-content')
    @include('front.partials.hero')
@endsection


@section('page-content')
<section class="section-2 bg-2 py-5">
    <div class="container">
        <h2>Popular Categories</h2>
        <div class="row pt-5">
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Computer Science</h4></a>
                    <p class="mb-0"> <span> {{ App\Models\Job::where('category_id','1')->count() }} </span> Available</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Finance</h4></a>
                    <p class="mb-0"> <span>0</span> Not added yet</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Banking</h4></a>
                    <p class="mb-0"> <span>0</span> Not added yet</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Design</h4></a>
                    <p class="mb-0"> <span>0</span> Not added yet</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Marketing</h4></a>
                    <p class="mb-0"> <span>0</span> Not added yet</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Digital Marketing</h4></a>
                    <p class="mb-0"> <span>0</span> Not added yet</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Digital Marketing</h4></a>
                    <p class="mb-0"> <span>0</span> Not added yet</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Digital Marketing</h4></a>
                    <p class="mb-0"> <span>0</span> Not added yet</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-3  py-5">
    <div class="container">
        <h2>Featured Jobs</h2>
        <div class="row pt-5">
            <div class="job_listing_area">                    
                <div class="job_lists">
                    <div class="row">
                        @if (count($featured_jobs)>0)
                            @foreach ( $featured_jobs as $featured_job )
                            <div class="col-md-4">
                                <div class="card border-0 p-3 shadow mb-4">
                                    <div class="card-body">
                                        <h3 class="border-0 fs-5 pb-2 mb-0">{{ $featured_job->job->name }} </h3>
                                        <p>We are in need of a Web Developer for our company.</p>
                                        <div class="bg-light p-3 border">
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                                <span class="ps-1">{{ $featured_job->job->location }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                <span class="ps-1">{{ $featured_job->job->category->name }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                <span class="ps-1">{{ $featured_job->job->salary }}</span>
                                            </p>
                                        </div>
    
                                        <div class="d-grid mt-3">
                                            <a href="{{ route('jobs.show',['job'=>$featured_job->job]) }}" class="btn btn-primary btn-lg">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        
                        
                       
                                                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-3 bg-2 py-5">
    <div class="container">
        <h2>Latest Jobs</h2>
        <div class="row pt-5">
            <div class="job_listing_area">                    
                <div class="job_lists">
                    <div class="row">
                        @if (count($jobs)>0)
                            @foreach ( $jobs as $job )
                            <div class="col-md-4">
                                <div class="card border-0 p-3 shadow mb-4">
                                    <div class="card-body">
                                        <h3 class="border-0 fs-5 pb-2 mb-0">{{ $job->name }}</h3>
                                        <p>We are in need of a {{ $job->name }} for our company.</p>
                                        <div class="bg-light p-3 border">
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                                <span class="ps-1">{{ $job->location }} </span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                <span class="ps-1"> {{ $job->job_type->name }} </span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                <span class="ps-1">{{ $job->salary }}</span>
                                            </p>
                                        </div>
    
                                        <div class="d-grid mt-3">
                                            <a href="{{ route('jobs.show',['job'=>$job]) }}" class="btn btn-primary btn-lg">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        {{ $jobs->render('pagination::bootstrap-4') }} 
                        
                        
                                                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection