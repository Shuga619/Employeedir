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
                			<h1 class="h4 text-gray-900 mb-4">Bulk Upload Contact to Employee Directory </h1>
              			</div>
              			<hr>
              			<form class="user" action="{{ route('bulkupload_to_contact_path') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                			<div class="form-group row">
                  				<div class="col-sm-12 mb-3 mb-sm-0">
                    				<input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="contact">
                  				</div>
                			</div>
                			<hr>
                			<p>Bulk Uploading should follow following rules:</p>
                			<ul>
                				<li>Follow the CSV format provided below:</li>
                				<li><a href="{{ asset('format/contact.csv') }}" class="btn btn-primary btn-sm">Click here to download Contact.CSV</a></li>
                				<li>Header of the CSV should not be removed</li>
                			</ul>
                			<hr>
                			<button type="submit" class="btn btn-primary btn-user btn-block">
                  				Import Contacts from CSV
                			</button>
              			</form>
              			<hr>
              			<p><small>Click <a href="{{ route('add_contact_path') }}">HERE</a> to add contact information via form.</small></p>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
@endsection