@extends('front.jobs.master')
@section('page-title','my jobs')
@section('sidebar')
@include('front.jobs.partials.sidebar')
@endsection
@section('content')
<div class="col-lg-9">
    <div class="card border-0 shadow mb-4 p-3">
        <div class="card-body card-form">
            <div class="d-flex justify-content-between">
                <div>
                    <h3 class="fs-4 mb-1">My Jobs</h3>
                </div>
                <div style="margin-top: -10px;">
                    <a href="{{ route('jobs.create') }}" class="btn btn-primary">Post a Job</a>
                </div>
                
            </div>
            <div class="table-responsive">
                <table class="table ">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Job Created</th>
                            <th scope="col">Applicants</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="border-0">
                        @if (count($jobs)>0)
                           @foreach ( $jobs as $job )
                           <tr class="{{ $job->status }}">
                            <td>
                                <div class="job-name fw-500">{{ $job->name }}</div>
                                <div class="info1">{{ $job->category->name }} . {{ $job->location }}</div>
                            </td>
                            <td>{{ $job->created_at }} </td>
                            <td>{{ $job->vacancy }} Applications</td>
                            <td>
                                <div class="job-status text-capitalize">{{ $job->status }}</div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                    <div class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('jobs.show',['job'=>$job]) }}"> <i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
                                        <li><a class="dropdown-item" href="{{ route('jobs.edit',['job'=>$job]) }}"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                                        <form action="{{ route('jobs.destroy', ['job' => $job]) }}" method="POST" style="display: inline;">
                                            @csrf 
                                            @method('DELETE')
                                            <li>
                                                <button type="submit" class="dropdown-item" style="border: none; background: none; padding: 0; margin: 0;">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Remove
                                                </button>
                                            </li>
                                        </form>
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                           @endforeach 
                        @endif
                        

                        
                    </tbody>
                    
                </table>
                
            </div>
           
        </div>
        {{ $jobs->render('pagination::bootstrap-4') }} 
    </div> 
</div>
@endsection