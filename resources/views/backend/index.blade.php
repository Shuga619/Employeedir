@extends('layouts.backend')

@section('content')

		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h5 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
              	<div class="card border-left-primary shadow h-100 py-2">
                	<div class="card-body">
                  		<div class="row no-gutters align-items-center">
                    		<div class="col mr-2">
                      			<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registerd Contacts</div>
                      			<div class="h3 mb-0 font-weight-bold text-gray-800">{{ $contacts }}</div>
                    		</div>
                    		<div class="col-auto">
                      			<i class="fas fa-id-card-alt fa-3x text-primary"></i>
                    		</div>
                  		</div>
                	</div>
              	</div>
            </div>

            <div class="offset-4 col-md-4 mb-4">
              	<div class="card border-left-success shadow h-100 py-2">
                	<div class="card-body">
                  		<div class="row no-gutters align-items-center">
                    		<div class="col mr-2">
                      			<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Admin Users</div>
                      			<div class="h3 mb-0 font-weight-bold text-gray-800">{{ count($admins) }}</div>
                    		</div>
                    		<div class="col-auto">
                      			<i class="fas fa-users-cog fa-3x text-success"></i>
                    		</div>
                  		</div>
                	</div>
              	</div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-sm-6 mb-4">
              	<div class="card shadow mb-4">
                	<div class="card-header py-3">
                  		<h6 class="m-0 font-weight-bold text-primary">Registered Admin Accounts</h6>
                	</div>
                	<div class="card-body">
                		@foreach($admins as $admin)
                  			<div class="row">
                  				<div class="col-1 p-1">
                  					<img class="img-profile rounded-circle " src="{{ asset('images/profile.jpg')}}" style="height: 35px;width: 35px; ">
                  				</div>
                  				<div class="col-11 pt-3">
                  					<h4 class="small font-weight-bold"><span class="text-primary">{{ $admin->name }}</span> has <span class= "badge badge-danger"> Admin </span> Rights</h4>
                  				</div>
                  			</div>
                  		@endforeach
                	</div>
              	</div>
            </div>

            <div class="col-sm-6 mb-4">
              	<div class="card shadow mb-4">
                	<div class="card-header py-3">
                  		<h6 class="m-0 font-weight-bold text-primary">Recent Employee Contacts</h6>
                	</div>
                	<div class="card-body">
                  		@foreach($conts as $cont)
                  			<div class="row">
                  				<div class="col-1 p-1">
                  					<img class="img-profile rounded-circle " src='{{ asset("storage/employee_images/$cont->image") }}' style="height: 35px;width: 35px; ">
                  				</div>
                  				<div class="col-10 pt-3">
                  					<h4 class="small font-weight-bold"><span class="text-primary">{{ $cont->name }}</span> was added to Directory on <span class= "badge badge-success">{{ date_format(date_create($cont->created_at),"d-M-Y") }}</span></h4>
                  				</div>
                  				<div class="col-1">
                  					<a href="{{ route('edit_contact_path', $cont->id) }}" class="btn btn-sm" data-toggle="tooltip" title="Edit {{ $cont->name }}'s Contact Info">
			                            <i class="far fa-edit"></i>
			                          </a>
                  				</div>
                  			</div>
                  		@endforeach
                	</div>
              	</div>
            </div>
        </div>
        
@endsection