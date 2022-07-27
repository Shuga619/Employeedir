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

	<!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

   
    
  </nav> -->
    <div class="container-fluid p-0">
      	<section class="search-section p-1 p-lg-5 d-block  d-column bg-bnb-white">
        	<div class="my-auto">
			<h1 class="mb-0 d-none d-xl-block"> 
            		Bhutan National Bank Limited
          		</h1>
				  <h2 class="no-case">Found {{ $records->count() }} Result(s) Matching the Search</h2>
				  <h4 class="no-case">
                <small>Ordering of search result is based on alphabetical order of Employees' name</small>
              </h4>
          		<div class="mb-5">
				  <section class="py-5">

				  <!-- <div class="row">
                    
                    @if($records->count() == 0)
                      <h2 class="no-case mb-5">No Record were found matching the query.</h2>
                    @else
                      @if($stat == 'contact')
                        @foreach($records as $r)
                          @php
                            $img = $r->employee->image
                          @endphp
                          <div class="col-lg-12">
                            <a href="{{ route('show_result_path',[Crypt::encryptString($r->employee->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department)]) }}" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">
                              <div class="row">
                                <div class="col-lg-4 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><img src='{{ asset("storage/employee_images/$img") }}' style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">
                                  <h5 class="mb-0 text-grey">
                                    {{ $r->employee->name }} 
                                    <br>
                                    <small class="text-bnb-orange">{{ $r->employee->title }}</small>
                                  </h5>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->extension }}</b></div>
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->mobile }}</b></div>
                                  <small class="mb-0 mt-3 mt-lg-0">click to view detail <i class="fas fa-arrow-right"></i></small>
                                </div>
                              </div>
                            </a>
                          </div>
                        @endforeach
                      @else
                        @foreach($records as $r)
                          <div class="col-lg-12">
                            <a href="{{ route('show_result_path',[Crypt::encryptString($r->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department)]) }}" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">
                              <div class="row">
                                <div class="col-lg-4 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><img src='{{ asset("storage/employee_images/$r->image") }}' style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">
                                  <h5 class="mb-0 text-bnb-blue"> 
                                    {{$r->name}}
                                    <br>
                                    <small class="text-bnb-orange">{{ $r->title }}</small>
                                  </h5>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->contact->extension }}</b></div>
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->contact->mobile }}</b></div>
                                  <small class="mb-0 mt-3 mt-lg-0">click to view detail <i class="fas fa-arrow-right"></i></small>
                                </div>
                              </div>
                            </a>
                          </div>
                        @endforeach
                      @endif
                    @endif
          </div>  -->
		  <div class="row">
                    @if($records->count() == 0)
                      <h2 class="no-case mb-5">No Record were found matching the query.</h2>
                    @else
                      @if($stat == 'contact')
                        @foreach($records as $r)
                          @php
                            $img = $r->employee->image
                          @endphp
                          <div class="col-lg-12">
                            <a href="{{ route('show_vehicle_path',[Crypt::encryptString($r->employee->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department)]) }}" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">
                              <div class="row">
                                <div class="col-lg-4 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                                  <img src='{{ asset("storage/employee_images/$img") }}' style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">
                                  <h5 class="mb-0 text-grey">
                                    {{ $r->employee->name }} 
                                    <br>
                                    <small class="text-bnb-orange">{{ $r->employee->title }}</small>
                                  </h5>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-2 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->extension }}</b></div>
                                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-2 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->mobile }}</b></div>
                                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fas fa-envelope-open"></i> <small>Employee ID</small> : <b class="text-bnb-blue">{{ $r-employee_id}}</b></div>
                                  <small class="mb-0 mt-3 mt-lg-0 bg-bnb-blue"> <i class="fas fa-arrow-right"></i></small>
                                </div>
                              </div>
                            </a>
                          </div>
                        @endforeach
                      @else
                        @foreach($records as $r)
                          <div class="col-lg-4 ">
                            <a href="{{ route('show_vehicle_path',[Crypt::encryptString($r->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department)]) }}" class="message px-5 py-3 no-anchor-style ">
                              <div class="card bg-hover-gradient-primary ">
                                <img src='{{ asset("storage/employee_images/$r->image") }}'  class="card-img-top rounded-circle " alt="...">
								                  <div  class="card-body -flex align-items-center flex-column flex-lg-row text-center text-md-left">
								                    <h5 class="mb-0 text-bnb-blue text-center"> 
                                    {{$r->name}}
                                    <br>
                                    <small class="text-bnb-orange">{{ $r->title }}</small>
                                  </h5>
                                  <div class="text-center">
                                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><small>Employee ID</small> : <b class="text-bnb-blue">{{ $r->employee_id}}</b></div>
								                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->contact->extension }}</b></div>
                                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->contact->mobile }}</b></div>
                                  <small class="mb-0 mt-3 mt-lg-0 "style="font-weight: 500; color: #FEB139;" ><i class="fas fa-arrow-right"></i></small>
                                  </div>
                                  
								</div>
                              </div>
                            </a>
                          </div>
                        @endforeach
                      @endif
                    @endif
          </div> 
      	</section>
    </div>
@endsection
