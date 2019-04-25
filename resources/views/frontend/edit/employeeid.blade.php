@extends('layouts.frontend')

@section('content')
  <nav class="navbar navbar-expand-lg navbar-dark {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none">Search Employee</span>
          <span class="d-none d-lg-block">
              <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset ('images/bnb.png')}}" alt="">
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
              <li class="nav-item mb-5">
                <h3 class="no-case {{$no == 1 ? 'text-bnb-blue' : 'text-bnb-orange'}}">
                  Employee Directory 
                </h3>
              </li>
              <li class="nav-item mb-5">
                <a href="{{ route('get_search_path') }}" class="btn btn-block {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}} {{$no == 1 ? 'text-bnb-orange' : 'text-bnb-blue'}}"><i class="fas fa-chevron-left fa-fw"></i> Back to Directory Search</a>
              </li>
              <li class="nav-item">
                <small class="text-white"><b>Built By : <br> BNBL IT Department <br>2019</b></small>
              </li>
          </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">
        <section class="search-section p-3 p-lg-5 d-block d-flex d-column {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}}">
          <div class="my-auto">
              <h1 class="mb-0"> 
                Bhutan National Bank Limited
              </h1>
              <h2 class="no-case mb-5">Edit Information in Employee Directory</h2>
              <div class="mb-5">
                <form class="d-block" action="{{ route('get_employee_and_send_otp_path') }}" method="POST">
                  @csrf
                  <div class="form-row mb-3">
                    <div class="col-8">
                      <input type="text" name="employeeid" class="form-control form-sz-lg" placeholder="Employee Identity Number">
                    </div>
                    <div class="col-4">
                      <select name="option_otp" class="form-control form-sz-lg">
                        <option value="mobile" disabled="disabled">Registered Mobile Number</option>
                        <option value="email" selected="selected">Registered Email ID</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12">
                      <button type="submit" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-block btn-lg text-white">Send OTP</button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </section>
    </div>
@endsection