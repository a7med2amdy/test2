@extends('front.jobs.master')


@section('content')
<div class="col-lg-9">
    <div class="card border-0 shadow mb-4 ">
        <div class="card-body card-form p-4">
            <h3 class="fs-4 mb-1">Job Details</h3>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="" class="mb-2">Title<span class="req">*</span></label>
                    <input type="text" placeholder="Job Title" id="title" name="title" class="form-control">
                </div>
                <div class="col-md-6  mb-4">
                    <label for="" class="mb-2">Category<span class="req">*</span></label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Select a Category</option>
                        <option value="">Engineering</option>
                        <option value="">Accountant</option>
                        <option value="">Information Technology</option>
                        <option value="">Fashion designing</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="" class="mb-2">Job Nature<span class="req">*</span></label>
                    <select class="form-select">
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Remote</option>
                        <option>Freelance</option>
                    </select>
                </div>
                <div class="col-md-6  mb-4">
                    <label for="" class="mb-2">Vacancy<span class="req">*</span></label>
                    <input type="number" min="1" placeholder="Vacancy" id="vacancy" name="vacancy" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="mb-4 col-md-6">
                    <label for="" class="mb-2">Salary</label>
                    <input type="text" placeholder="Salary" id="salary" name="salary" class="form-control">
                </div>

                <div class="mb-4 col-md-6">
                    <label for="" class="mb-2">Location<span class="req">*</span></label>
                    <input type="text" placeholder="location" id="location" name="Location" class="form-control">
                </div>
            </div>

            <div class="mb-4">
                <label for="" class="mb-2">Description<span class="req">*</span></label>
                <textarea class="form-control" name="description" id="description" cols="5" rows="5" placeholder="Description"></textarea>
            </div>
            <div class="mb-4">
                <label for="" class="mb-2">Benefits</label>
                <textarea class="form-control" name="benefits" id="benefits" cols="5" rows="5" placeholder="Benefits"></textarea>
            </div>
            <div class="mb-4">
                <label for="" class="mb-2">Responsibility</label>
                <textarea class="form-control" name="responsibility" id="responsibility" cols="5" rows="5" placeholder="Responsibility"></textarea>
            </div>
            <div class="mb-4">
                <label for="" class="mb-2">Qualifications</label>
                <textarea class="form-control" name="qualifications" id="qualifications" cols="5" rows="5" placeholder="Qualifications"></textarea>
            </div>
            
            

            <div class="mb-4">
                <label for="" class="mb-2">Keywords<span class="req">*</span></label>
                <input type="text" placeholder="keywords" id="keywords" name="keywords" class="form-control">
            </div>

            <h3 class="fs-4 mb-1 mt-5 border-top pt-5">Company Details</h3>

            <div class="row">
                <div class="mb-4 col-md-6">
                    <label for="" class="mb-2">Name<span class="req">*</span></label>
                    <input type="text" placeholder="Company Name" id="company_name" name="company_name" class="form-control">
                </div>

                <div class="mb-4 col-md-6">
                    <label for="" class="mb-2">Location</label>
                    <input type="text" placeholder="Location" id="location" name="location" class="form-control">
                </div>
            </div>

            <div class="mb-4">
                <label for="" class="mb-2">Website</label>
                <input type="text" placeholder="Website" id="website" name="website" class="form-control">
            </div>
        </div> 
        <div class="card-footer  p-4">
            <button type="button" class="btn btn-primary">Save Job</button>
        </div>               
</div>
@endsection