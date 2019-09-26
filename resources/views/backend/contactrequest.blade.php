@extends('layouts.backend')

@section('content')
	<div class="row">

		@foreach($contacts as $contact)
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  	<div class="row no-gutters">
				    	<div class="col-md-4 p-1">
				      		<img src='{{asset ("storage/employee_images/$contact->image")}}' class="card-img" alt="{{ $contact->image }}">
				    	</div>
					    <div class="col-md-8">
					      <div class="card-body">
					        	<h5 class="card-title">
					        		<span class="text-primary">{{ $contact->name }}</span>
					        		<div class="btn-group float-right text-white">
					        			<form action="{{ route('approve_contact_path') }}" method="POST">
					        				@csrf
					        				<input type="hidden" name="id" value="{{ $contact->id }}">
					        				<input type="hidden" name="name" value="{{ $contact->name }}">
					        				<input type="hidden" name="designation" value="{{ $contact->designation }}">
					        				<input type="hidden" name="title" value="{{ $contact->title }}">
					        				<input type="hidden" name="employee_id" value="{{ $contact->employee_id }}">
					        				<input type="hidden" name="mobile" value="{{ $contact->mobile }}">
					        				<input type="hidden" name="extension" value="{{ $contact->extension }}">
					        				<input type="hidden" name="email" value="{{ $contact->email}}">
					        				<input type="hidden" name="flexcube" value="{{ $contact->flexcube }}">
					        				<input type="hidden" name="department" value="{{ $contact->department_id }}">
					        				<input type="hidden" name="location" value="{{ $contact->location_id }}">
					        				<input type="hidden" name="image" value="{{ $contact->image }}">
					        				<button type="submit" name="submit_type" value="approve" class="btn btn-primary btn-sm"><small>Approve</small></button>

					        				<button type="submit" name="submit_type" value="reject" class="btn btn-danger btn-sm"><small>Reject</small></button>
					        			</form>
					        		</div>
					        	</h5>
					        	<p class="card-text">
					        		<small>
					        		Contact Addition Request by <span class="text-primary">{{ $contact->name }}</span> bearing Employee ID: <span class="text-danger">{{$contact->employee_id}}</span>, Designated as <span class="text-danger">{{$contact->designation}}</span> with Job Title <span class="text-danger">{{$contact->title}}.</span>
					        		</small>
					        		<br>
					        		<small>
					        			<i class="fas fa-mobile"></i> : {{ $contact->mobile }} &nbsp; | &nbsp; <i class="fas fa-phone"></i> : {{ $contact->extension }} &nbsp; | &nbsp; <i class="fas fa-envelope-open-text"></i> : {{ $contact->email }} &nbsp; | &nbsp; <i class="fas fa-user-shield"></i> : {{ $contact->flexcube }} &nbsp; | &nbsp; <i class="fas fa-sitemap"></i> : {{ $contact->department->name }} Department &nbsp; | &nbsp; <i class="fas fa-map-marker-alt"></i> : {{ $contact->location->name }}
					        		</small>
					        	</p>
					        	
					      	</div>
					    </div>
				  	</div>
				</div>
			</div>
		@endforeach
		
	</div>
@endsection