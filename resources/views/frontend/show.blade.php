@extends('layouts.frontend')

@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} fixed-top" id="sideNav">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top">
        	<span class="d-block d-lg-none">BNBL Employee Directory</span>
        	<span class="d-none d-lg-block">
          		<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src='{{asset ("storage/employee_images/$record->image")}}' alt="">
        	</span>
      	</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
      	<div class="collapse navbar-collapse" id="navbarSupportedContent">
        	<ul class="navbar-nav">
          		<li class="nav-item mb-5">
            		<h4 class="no-case {{$no == 1 ? 'text-bnb-blue' : 'text-bnb-orange'}}">Contact Information 
            			<br>of <br> {{ $record->name }}</h4>
          		</li>
          		<li class="nav-item mb-5">
          			<form action="{{ route('search_directory_path') }}" method="POST">
                  @csrf
                  <input type="hidden" name="employeename" value="{{ $param_name }}">
                  <input type="hidden" name="department" value="{{ $param_department }}">
                  <input type="hidden" name="location" value="{{ $param_location }}">
                  <button type="submit" class="btn btn-block {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}} {{$no == 1 ? 'text-bnb-orange' : 'text-bnb-blue'}}"><i class="fas fa-chevron-left fa-fw"></i> Back to Search Result</button>
                </form>
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

      	<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        	<div class="my-auto">
          		<h2 class="mb-0"> 
            		{{ $record->name }}
          		</h2>
          		<div class="subheading mb-4"><span title="Designation" data-toggle="tooltip" class="text-bnb-blue"data-placement="bottom">{{$record->designation}}</span> &nbsp; | &nbsp; <span class="text-bnb-orange"data-placement="bottom" data-toggle="tooltip" title="Job Title">{{$record->title}}</span> &nbsp; | &nbsp; <span class="text-bnb-blue"data-placement="bottom" data-toggle="tooltip" title="Department">{{$record->department->name}} Department</span></div>

          		<div class="social-icons">
            		<a href="#" class="mb-3">
              			<i class="fas fa-phone"></i> 
            		</a>
            		<h3>Extension : {{ $record->contact->extension }}</h3>
            		<br>
            		<a href="#" class="mb-3">
              			<i class="fas fa-mobile"></i>
            		</a>
            		<h3>Mobile Number : {{ $record->contact->mobile }}</h3>
            		<br>
            		<a href="#" class="mb-3">
              			<i class="fas fa-envelope-open"></i>
            		</a>
            		<h3>Email ID : <span class="text-bnb-blue lowercase">{{ $record->contact->email }}</span></h3>
            		<br>
            		<a href="#" class="mb-3">
              			<i class="fas fa-user-shield"></i>
            		</a>
            		<h3>Flexcube User ID : <span class="text-bnb-blue no-case"> {{ $record->contact->flexcube }}</span></h3>
            		<br>
            		<a href="#">
              			<i class="fas fa-map-marker-alt"></i>
            		</a>
            		<h3>Location : {{ $record->contact->location->name }}</h3>
          		</div>
          		<br>
          		<small>If any information is invalid, Please contact your Branch IT or call at 1277.</small>
        	</div>
      	</section>
    </div>
@endsection