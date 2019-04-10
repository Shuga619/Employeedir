@extends('layouts.backend')

@section('content')
  	<div class="card o-hidden border-0 shadow-lg my-5">
      	<div class="card-body p-0">
        	<!-- Nested Row within Card Body -->
        	<div class="row">
          		<div class="col-lg-5 d-none d-lg-block">
                <img src='{{ asset("storage/employee_images/$employee->image") }}' class="rounded mx-auto d-block align-middle" style="max-width:350px; position: sticky; top:100px;">   
              </div>
          		<div class="col-lg-7">
            		<div class="p-5">
              			<div class="text-center">
                			<h1 class="h4 text-gray-900 mb-4">Add Contact to Employee Directory </h1>
              			</div>
              			<hr>
              			<form class="user" action="{{ route('update_contact_path') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                			<div class="form-group row">
                  				<div class="col-sm-12 mb-3 mb-sm-0">
                            <small>Name</small>
                    				<input type="text" class="form-control form-control-user" placeholder="Employee Name" name="name" value="{{ $employee->name }}" required autofocus>
                            <input type="hidden" name="id" value="{{ $employee->id }}">
                  				</div>
                			</div>
                			<div class="form-group row">
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                            <small>Designation</small>
                    				<input type="text" class="form-control form-control-user" placeholder="Designation" name="designation" value="{{ $employee->designation }}" required>
                  				</div>
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                            <small>Job Title</small>
                    				<input type="text" class="form-control form-control-user" placeholder="Job Title" name="title" value="{{ $employee->title }}" required>
                  				</div>
                			</div>
                      <hr>
                			<div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <small>Currently Selected Department: </small>
                            <input type="text" class="form-control form-control-user mb-3" placeholder="Employee Department" name="odepartment" value="{{ $employee->department->name }}" disabled="disabled">
                            <input type="hidden" name="odepartment" value="{{ $employee->department->id }}">
                          </div>

                  				<div class="col-sm-12 mb-3 mb-sm-0">
                    				<small>Select Department only if you wish to change the current department:</small>
                            <select class="form-control" name="department" required>
                                <option selected="selected" value="0">Select Employee's Department</option>
                                @foreach($departments as $d)
                                  <option value="{{ $d->id }}"> {{ $d->name }} Department</option>
                                @endforeach
                            </select>
                  				</div>
                			</div>
                			<hr>
                			<div class="form-group row">
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                            <small>Extension </small>
                    				<input type="text" class="form-control form-control-user" placeholder="Extension Number" name="extension" value="{{ $employee->contact->extension }}">
                  				</div>
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                            <small>Flexcube User Name</small>
                    				<input type="text" class="form-control form-control-user" placeholder="Flexcube User ID" name="flexcube" value="{{ $employee->contact->flexcube }}">
                  				</div>
                			</div>
                			<div class="form-group">
                          <small>Email</small>
                  				<input type="email" class="form-control form-control-user" placeholder="Email Address" name="email" value="{{ $employee->contact->email }}">
                			</div>
                			<div class="form-group row">
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                            <small>Mobile Number</small>
                    				<input type="text" class="form-control form-control-user" placeholder="Mobile Number" name="mobile" value="{{ $employee->contact->mobile }}" required>
                  				</div>
                			</div>
                      <hr>
                      <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <small>Currently Selected Office Location: </small>
                            <input type="text" class="form-control form-control-user mb-3" placeholder="Office Location" name="olocation" value="{{ $employee->contact->location->name }}" disabled="disabled">
                            <input type="hidden" name="olocation" value="{{ $employee->contact->location->id }}">
                          </div>

                          <div class="col-sm-12 mb-3 mb-sm-0">
                            <small>Select New Location only if you wish to change the current Location:</small>
                            <select class="form-control" name="location" required>
                                <option selected="selected" value="0">Select Employee's Office Location</option>
                                @foreach($locations as $l)
                                  <option value="{{ $l->id }}"> {{ $l->name }} </option>
                                @endforeach
                            </select>
                          </div>
                      </div>
                      <hr>
                      <button type="submit" href="login.html" class="btn btn-primary btn-user btn-block">
                          Update Contact Information
                      </button>
              			</form>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
@endsection