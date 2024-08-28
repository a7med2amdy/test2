
@extends('front.jobs.master')
@section('page-title','post job')
@section('sidebar')
@include('front.jobs.partials.sidebar')
@endsection
@section('content')

<div class="col-lg-9">
    <div class="card border-0 shadow mb-4 ">
        <div class="card-body card-form p-4">
            <h3 class="fs-4 mb-1">Job Details</h3>
            <x-auth-session-status class="mb-4" :status="session('create-job-status')" />
    <form action="{{ route('jobs.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-4">
            <label for="title" class="mb-2">Title<span class="req">*</span></label>
            <input type="text" placeholder="Job Title" id="title" name="name" class="form-control">
            <x-input-error :messages="$errors->get('name')" class="mt-2" /> 
        </div>

        <div class="col-md-6 mb-4">
            <label for="category" class="mb-2">Category<span class="req">*</span></label>
            <select name="category" id="category" class="form-select">
                @if (count($categories)>0)
                    @foreach ($categories as $category )
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                @endif
                
                
                
            </select>
            
            <x-input-error :messages="$errors->get('category')" class="mt-2" /> 
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <label for="job_nature" class="mb-2">Job Nature<span class="req">*</span></label>
            <select name="job_nature" id="job_nature" class="form-select">
                @if (count($jobs_types)>0)
                    @foreach ($jobs_types as $job_type)
                    <option value="{{ $job_type->name }}">{{ $job_type->name }}</option>
                    @endforeach
                @endif
            </select>
            <x-input-error :messages="$errors->get('job_nature')" class="mt-2" /> 
        
        </div>
        <div class="col-md-6 mb-4">
            <label for="vacancy" class="mb-2">Vacancy<span class="req">*</span></label>
            <input type="number" min="1" placeholder="Vacancy" id="vacancy" name="vacancy" class="form-control">
            <x-input-error :messages="$errors->get('vacancy')" class="mt-2" /> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <label for="salary" class="mb-2">Salary</label>
            <input type="text" placeholder="Salary" id="salary" name="salary" class="form-control">
            <x-input-error :messages="$errors->get('salary')" class="mt-2" /> 
        </div>
        <div class="col-md-6 mb-4">
            <label for="location" class="mb-2">Location<span class="req">*</span></label>
            <input type="text" placeholder="Location" id="location" name="location" class="form-control">
            <x-input-error :messages="$errors->get('location')" class="mt-2" /> 
        </div>
    </div>

    <div class="mb-4">
        <label for="description" class="mb-2">Description<span class="req">*</span></label>
        <textarea class="form-control" name="description" id="description" cols="5" rows="5" placeholder="Description"></textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" /> 
    </div>

    <div class="mb-4">
        <label for="benefits" class="mb-2">Benefits</label>
        <textarea class="form-control" name="benefits" id="benefits" cols="5" rows="5" placeholder="Benefits"></textarea>
        <x-input-error :messages="$errors->get('benefits')" class="mt-2" /> 
    </div>

    <div class="mb-4">
        <label for="responsibility" class="mb-2">Responsibility</label>
        <textarea class="form-control" name="responsibility" id="responsibility" cols="5" rows="5" placeholder="Responsibility"></textarea>
        <x-input-error :messages="$errors->get('responsibility')" class="mt-2" /> 
    </div>

    <div class="mb-4">
        <label for="qualifications" class="mb-2">Qualifications</label>
        <textarea class="form-control" name="qualifications" id="qualifications" cols="5" rows="5" placeholder="Qualifications"></textarea>
        <x-input-error :messages="$errors->get('qualifications')" class="mt-2" /> 
    </div>

    <div class="mb-4">
        <label for="keywords" class="mb-2">Keywords<span class="req">*</span></label>
        <input type="text" placeholder="Keywords" id="keywords" name="keywords" class="form-control">
        <x-input-error :messages="$errors->get('keywords')" class="mt-2" />
    </div>

    <h3 class="fs-4 mb-1 mt-5 border-top pt-5">Company Details</h3>

    <div class="row">
        <div class="col-md-6 mb-4">
            <label for="company_name" class="mb-2">Company Name<span class="req">*</span></label>
            <input type="text" placeholder="Company Name" id="company_name" name="company_name" class="form-control">
            <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
        </div>

        <div class="col-md-6 mb-4">
            <label for="company_location" class="mb-2">Company Location</label>
            <input type="text" placeholder="Company Location" id="company_location" name="company_location" class="form-control">
            <x-input-error :messages="$errors->get('company_location')" class="mt-2" />
        </div>
    </div>

    <div class="mb-4">
        <label for="company_website" class="mb-2">Company Website</label>
        <input type="text" placeholder="Company Website" id="company_website" name="company_website" class="form-control">
        <x-input-error :messages="$errors->get('company_website')" class="mt-2" />
    </div>

  

    <div class="card-footer p-4">
        <button type="submit" class="btn btn-primary">Save Job</button>
    </div>
</form>           
</div>
@endsection