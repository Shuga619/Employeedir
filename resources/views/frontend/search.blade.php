@extends('layouts.frontend')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-bnb-blue" id="sideNav">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top">
        	<span class="d-block d-lg-none">Search Employee</span>
        	<span class="d-none d-lg-block">
          		<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset ('images/bnb.png')}}" alt="">
        	</span>

      	</a>
		 
      	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
		 

      	<div class="collapse navbar-collapse sidebar" id="navbarSupportedContent">
			
        	<ul class="navbar-nav">
          		<li class="nav-item mb-5">
            		<h3 class="no-case">
            			Employee Directory 
            		</h3>
          		</li>
				 <li class="nav-item nav-list">
					<a href="{{ route('get_search_path') }}">
						<small class="text-white">
						<i class='fas fa-home'></i>
							Dashboard
						</small>
				
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('get_vehicle_path') }}">
						<small class="text-white">
						<i class='fas fa-car-alt'></i>
							Vehicle Details
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('login_info_path') }}">
						<small class="text-white">
						<i class="fas fa-user-edit"></i>
							Edit Your Information
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('employee_registration_path') }}">
						<small class="text-white">
						<i class="fas fa-user-plus"></i>
							Register Your Information
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('get_report_path') }}">
					<small class="text-white">
					<i class='fas fa-address-book'></i>
						Generate Report
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('sign_index_path') }}">
						<small class="text-white">
						<i class="fas fa-signature"></i>
						Generate Mail Signature
						</small>
					</a>
          		</li>
        	</ul>	
      	</div>
    </nav>
    <!-- Right navbar links -->


	<div class="content">
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column bg-bnb-white">
        	<div class="my-auto">
			<h1 class="mb-0 d-none d-xl-block "> 
            		Bhutan National Bank Limited
          		</h1>
              <h1 class="mb-0 d-none d-lg-block d-xl-none d-sm-block d-xs-none "> 
                Bhutan National Bank
              </h1>
          		<h2 class="no-case mb-5 ">Search Employee Directory</h2>
	<body onload="load()">
	 <p>
	 <div class="box mb-5 container">
		<div class="box">
		   <div class="counter col">
			  <p id='0101' class="fs-2">0</p>
			  <p>Employee</p>
		   </div>
		   <div class="counter col">
			  <p id='0102' class="fs-2">876</p>
			  <p >Department</p>
		</div>
		<div class="counter col">
		   <p class="fs-2"><span id='0103'>12</span></p>
		   <p class="align-content-center">Extension</p>
		</div>
	 </div>
  </div>
  </p>
  <script>
	 function animate(obj, initVal, lastVal, duration) {
		let startTime = null;

	 //get the current timestamp and assign it to the currentTime variable
	 let currentTime = Date.now();

	 //pass the current timestamp to the step function
	 const step = (currentTime ) => {

	 //if the start time is null, assign the current time to startTime
	 if (!startTime) {
		startTime = currentTime ;
	 }

	 //calculate the value to be used in calculating the number to be displayed
	 const progress = Math.min((currentTime - startTime)/ duration, 1);

	 //calculate what to be displayed using the value gotten above
	 obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

	 //checking to make sure the counter does not exceed the last value (lastVal)
	 if (progress < 1) {
		window.requestAnimationFrame(step);
	 } else {
		   window.cancelAnimationFrame(window.requestAnimationFrame(step));
		}
	 };
	 //start animating
		window.requestAnimationFrame(step);
	 }
	 let text1 = document.getElementById('0101');
	 let text2 = document.getElementById('0102');
	 let text3 = document.getElementById('0103');
	 const load = () => {
		animate(text1, 0, 511, 7000);
		animate(text2, 0, 232, 7000);
		animate(text3, 100, 25, 7000);
	 }
  </script>
</body>
				  <div class="mb-5">
          			<form class="d-block" action="{{ route('search_directory_path') }}" method="POST">
                  @csrf
          				<div class="form-row mb-3">
          					<div class="col-md-3">
          						<input type="text" name="employeename" class="form-control form-sz-lg" placeholder="Employee Name">
          					</div>
                    <div class="col-md-3">
                      <input type="text" name="flexcube" class="form-control form-sz-lg" placeholder="Flexcube ID">
                    </div>
          					<div class="col-md-3">
          						<select name="department" class="form-control form-sz-lg">
          							<option selected="selected" value="0">Select Department</option>
                        @foreach($departments as $d)
                          <option value="{{ $d->id }}"> {{ $d->name }} </option>
                        @endforeach
          						</select>
          					</div>
          					<div class="col-md-3">
          						<select name="location" class="form-control form-sz-lg">
          							<option selected="selected" value="0">Select Location</option>
          						  @foreach($locations as $l)
                          <option value="{{ $l->id }}">{{ $l->name }}</option>
                        @endforeach
                      </select>
          					</div>
          				</div>
          				<div class="form-row">
          					<div class="col-md-12">
          						<button type="submit" class="btn btn-block btn-lg text-white bg-bnb-blue"><i class="fas fa-search"></i> Search Directory</button>
          					</div>
          				</div>
          			</form>

				
          		</div>
				  <div>
          			<p class="search-notification ">
          				<i class="far fa-bell fa-fw fa-2x"></i>Notification : 
          				<br>
          				Keeping all the above fields blank will view all the employees.
          				<br>
          				Keeping one or two above fields blank will ignore the blank fields.
          			  <br>
                  <br>
                  </p>
          		</div>
										
				
        	</div>
				
      	</section>
    </div>
	</div>


	
@endsection


