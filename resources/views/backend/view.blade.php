@extends('layouts.backend')

@section('content')
  	<div class="card o-hidden border-0 shadow-lg my-5">
      	<div class="card-body p-0">
        	<!-- Nested Row within Card Body -->
        	<div class="row">
              <div class="col-lg-12">
                <div class="mb-4">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Contact Information of {{ $employee->name }} </h1>
                  </div>
                </div>
                <hr>
              </div>
          		<div class="col-lg-4">
                <img src='{{ asset("storage/employee_images/$employee->image") }}' class="rounded mx-auto d-block" style="max-width:300px;">  
              </div>
          		<div class="col-lg-8">
            		<div class="p-2">
                  <div class="row mb-3">  
                    <div class="col-md-12">
                      <h4>Name : {{ $employee->name }}</h4>
                    </div>
                  </div>
                  <div class="row mb-3">  
                    <div class="col-md-12">
                      <h5>Employee ID : {{ $employee->employee_id }}</h5>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <h5>Designation : {{ $employee->designation }}</h5>
                    </div>
                    <div class="col-md-6">
                      <h5>Title : {{ $employee->title }}</h5>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-12">
                      <h5>Department : {{ $employee->department->name }}</h5>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <h5>Extension : {{ $employee->contact->extension }}</h5>
                    </div>
                    <div class="col-md-6">
                      <h5>Mobile : {{ $employee->contact->mobile }}</h5>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <h5>Flexcube : {{ $employee->contact->flexcube }}</h5>
                    </div>
                    <div class="col-md-6">
                      <h5>Email : {{ $employee->contact->email }}</h5>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-12">
                      <h5>Location : {{ $employee->contact->location->name }}</h5>
                    </div>
                  </div>
                  <hr>
                  <a href="{{ route('edit_contact_path', $employee->id) }}" class="btn btn-primary btn-block">
                    Edit Contact Information
                  </a>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
@endsection