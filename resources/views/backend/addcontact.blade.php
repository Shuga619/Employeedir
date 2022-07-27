@extends('layouts.backend')

@section('content')
  	<div class="card o-hidden border-0 shadow-lg my-5">
      	<div class="card-body p-0">
        	<!-- Nested Row within Card Body -->
        	<div class="row">
          		<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          		<div class="col-lg-7">
            		<div class="p-5">
              			<div class="text-center">
                			<h1 class="h4 text-gray-900 mb-4">Add Contact to Employee Directory </h1>
              			</div>
              			<hr>
              			<form class="user" action="{{ route('add_to_contact_path') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                			<div class="form-group row">
                  				<div class="col-sm-12 mb-3 mb-sm-0">
                    				<input type="text" class="form-control form-control-user" placeholder="Employee Name" name="name" required autofocus>
                  				</div>
                			</div>
                			<div class="form-group row">
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                    				<input type="text" class="form-control form-control-user" placeholder="Designation" name="designation" required>
                  				</div>
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                    				<input type="text" class="form-control form-control-user" placeholder="Job Title" name="title" required>
                  				</div>
                			</div>
                			<div class="form-group row">
                  				<div class="col-sm-12 mb-3 mb-sm-0">
                    				<select class="form-control" name="department" required>
                                <option selected="selected">Select Employee's Department</option>
                              @foreach($departments as $d)
                                <option value="{{ $d->id }}">{{ $d->name }} Department</option>
                              @endforeach
                            </select>
                  				</div>
                			</div>
                			<hr>
                			<div class="form-group row">
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                    				<input type="text" class="form-control form-control-user" placeholder="Extension Number" name="extension">
                  				</div>
                  				<div class="col-sm-6 mb-3 mb-sm-0">
                    				<input type="text" class="form-control form-control-user" placeholder="Flexcube User ID" name="flexcube">
                  				</div>
                			</div>
                			<div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" placeholder="Employee ID" name="empid">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                  				<input type="email" class="form-control form-control-user" placeholder="Email Address" name="email">
                			  </div>
                      </div>
                			<div class="form-group row">
                  				<div class="col-sm-4 mb-3 mb-sm-0">
                    				<input type="text" class="form-control form-control-user" placeholder="Mobile Number" name="mobile" required>
                  				</div>
                  				<div class="col-sm-8">
                    				<select class="form-control " name="location" required>
                              <option selected="selected">Select Office Location</option>
                              @foreach($locations as $l)
                                <option value="{{ $l->id }}"> {{$l->name}} </option>
                              @endforeach
                            </select>
                  				</div>
                			</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="text" class="form-control form-control-user" placeholder="Vehicle Number" name="vehicle_number">
							</div>
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="text" class="form-control form-control-user" placeholder="Present Address" name="present_address" required="required">
							</div>
                      	</div>
                      <hr>
                      <div class="form-group row">
                        <p class="mb-4">Employee's Profile Picture</p>
                          <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="file" name="image" required>
                          </div>
                      </div>
                      <hr>
                			<button type="submit" href="login.html" class="btn btn-primary btn-user btn-block">
                  				Add to Contact
                			</button>
                      <hr>
                      <p><small>Click <a href="{{ route('bulkupload_path') }}">HERE</a> to perform bulk upload.</small></p>
              			</form>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
@endsection