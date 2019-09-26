@extends('layouts.frontend')

@section('content')
  <nav class="navbar navbar-expand-lg navbar-dark {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none">BNBL Employee Directory</span>
          <span class="d-none d-lg-block">
              <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src='{{asset ("images/bnb.png")}}' alt="" id="prev">
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
              <li class="nav-item mb-5">
                <h4 class="no-case {{$no == 1 ? 'text-bnb-blue' : 'text-bnb-orange'}}">Contact Information 
                  <br> Registration
              </li>
              <li class="nav-item">
                <small class="text-white"><b>Built By : <br> BNBL IT Department <br>2019</b></small>
              </li>
          </ul>
        </div>
    </nav>

    <div class="p-5">
          <h2>Contact Information Registration</h2>
          <hr>
                <div class="pl-5 pr-5 pt-3">
                    <form action="{{ route('contact_addition_request_path') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-4">
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Employee Name</b></small>
                            <input type="text" class="form-control form-control-user" placeholder="Employee Name" name="name" required autofocus>
                          </div>
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Designation</b></small>
                            <input type="text" class="form-control form-control-user" placeholder="Designation" name="designation" required>
                          </div>
                      </div>
                      <div class="row mb-4">
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Job Title</b></small>
                            <input type="text" class="form-control form-control-user" placeholder="Job Title" name="title" required>
                          </div>
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Department</b></small>
                            <select class="form-control" name="department" required>
                                <option selected="selected">Select Employee's Department</option>
                              @foreach($department as $d)
                                <option value="{{ $d->id }}">{{ $d->name }} Department</option>
                              @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="row mb-4">
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Extension Number</b></small>
                            <input type="text" class="form-control form-control-user" placeholder="Extension Number" name="extension">
                          </div>
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Flexcube User ID</b></small>
                            <input type="text" class="form-control form-control-user" placeholder="Flexcube User ID" name="flexcube">
                          </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-sm-6">
                          <small class="text-bnb-blue"><b>Employee ID</b></small>
                          <input type="text" class="form-control form-control-user" placeholder="Employee ID" name="empid" required="required">
                        </div>
                        <div class="col-sm-6">
                          <small class="text-bnb-blue"><b>BNBL Email ID</b></small>
                          <input type="email" class="form-control form-control-user" placeholder="Email Address" name="email" required="required">
                        </div>
                      </div>
                      <div class="row mb-4">
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Mobile Number</b></small>
                            <input type="text" class="form-control form-control-user" placeholder="Mobile Number" name="mobile" required>
                          </div>
                          <div class="col-sm-6">
                            <small class="text-bnb-blue"><b>Office Location</b></small>
                            <select class="form-control " name="location" required>
                              <option selected="selected">Select Office Location</option>
                              @foreach($location as $l)
                                <option value="{{ $l->id }}"> {{$l->name}} </option>
                              @endforeach
                            </select>
                          </div>
                      </div>
                      <hr>
                      <div class="form-group"> 
                          <small class="text-bnb-blue"><b>Employee Image</b></small>
                          <br>
                          <input type="file" name="profile" onchange="showMyImage(this)" required="required">
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-6">
                          <button type="submit" class="btn bg-bnb-blue text-white">
                            <b>Submit for Approval</b>
                          </button>
                        </div>
                        <div class="col-sm-6">
                          <a href="{{ route('get_search_path') }}" class="btn bg-bnb-orange float-right text-white"><b>Back to Directory Search</b></a>
                        </div>
                      </div>
                    </form>
                </div>
    </div>
@endsection