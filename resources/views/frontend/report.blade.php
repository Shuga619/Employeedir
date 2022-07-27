@extends('layouts.frontend')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-bnb-blue" id="sideNav">
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

	
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block  d-column d-flex bg-bnb-white">
        	<div class="my-auto">
          		<h2 class="no-case mb-5 ">Generate Employee Report</h2>
          		<div class="mb-5">
          			<form class="d-block" action="{{ route('search_directory_path') }}" method="POST">
                  @csrf
          				<div class="form-row mb-3">
          					<div class="col-md-3">
          						<input type="text" name="employeename" class="form-control form-sz-lg" placeholder="Employee Name">
          					</div>

							  <div class="col-md-3">
          						<select name="department" class="form-control form-sz-lg">
          							<option selected="selected" value="0">Select Branch</option>
                        @foreach($departments as $d)
                          <option value="{{ $d->id }}"> {{ $d->name }} </option>
                        @endforeach
          						</select>
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
          							<option selected="selected" value="0">Select Designation</option>
          						  @foreach($locations as $l)
                          <option value="{{ $l->id }}">{{ $l->name }}</option>
                        @endforeach
                      </select>
          					</div>
          				</div>
          				
          			</form>
          		</div>

				<div class="mb-5">
					<button type="button" class="btn btn-primary bg-bnb-blue">Export in Excel</button>

				</div>
				<div class="mb-5">
					<table class="table table-bordered">
  						<thead>
   							 <tr>
     							<th scope="col">#</th>
    						  	<th scope="col">Name</th>
      							<th scope="col">Employee ID</th>
      							<th scope="col">Designation</th>
								<th scope="col">Department</th>
								<th scope="col">Phone Number</th>
								<th scope="col">Email ID</th>
								<th scope="col">Branch</th>
    						</tr>
  						</thead>
 						<tbody>
   		 					<tr>
      							<th scope="row">1</th>
      							<td>Chening Yangden</td>
      							<td>2022060104</td>
      							<td>Assistant Manager</td>
								<td>Digital Transformation</td>
								<td>17307971</td>
								<td>cyangden@bnb.bt</td>
								<td>Thimphu Coporate Branch</td>
    						</tr>
							<tr>
      							<th scope="row">1</th>
      							<td>Chening Yangden</td>
      							<td>2022060104</td>
      							<td>Assistant Manager</td>
								<td>Digital Transformation</td>
								<td>17307971</td>
								<td>cyangden@bnb.bt</td>
								<td>Thimphu Coporate Branch</td>
    						</tr>
  						</tbody>
					</table>
				</div>						
				<div>
				<nav aria-label="Page navigation example">
 					<ul class="pagination justify-content-end">
    					<li class="page-item"><a class="page-link" href="#">Previous</a></li>
    					<li class="page-item"><a class="page-link" href="#">1</a></li>
    					<li class="page-item"><a class="page-link" href="#">2</a></li>
    					<li class="page-item"><a class="page-link" href="#">3</a></li>
    					<li class="page-item"><a class="page-link" href="#">Next</a></li>
  					</ul>
				</nav>
				</div>
        	</div>
      	</section>
    </div>
@endsection
