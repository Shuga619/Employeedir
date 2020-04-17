@extends('layouts.frontend')

@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} fixed-top" id="sideNav">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top">
        	<span class="d-block d-lg-none">Mail Signature Generator</span>
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
            			Mail Signature Generator
            		</h3>
          		</li>
          		<li class="nav-item">
          			<small class="text-white"><b>Built By : <br> BNBL IT Department <br>{{ date_format(date_create(),'Y') }}</b></small>
          		</li>
        	</ul>
      	</div>
    </nav>

    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}}">
        	<div class="my-auto">
          		<h1 class="mb-0 d-none d-xl-block {{$no == 1 ? 'text-white' : ''}}"> 
            		Bhutan National Bank Limited
          		</h1>
              <h1 class="mb-0 d-none d-lg-block d-xl-none d-sm-block d-xs-none {{$no == 1 ? 'text-white' : ''}}"> 
                Bhutan National Bank
              </h1>
          		<h2 class="no-case mb-5 {{$no == 1 ? 'text-white' : ''}}">Mail Signature Generator</h2>
          		<div class="mb-5">
          			<form class="d-block" action="{{ route('sign_search_directory_path') }}" method="POST">
                  @csrf
          				<div class="form-row mb-3">
          					<div class="col-md-8">
          						<input type="text" name="employee_id" class="form-control form-sz-lg" placeholder="Enter your Employee ID" maxlength="10">
          					</div>
          					<div class="col-md-4">
          						<button type="submit" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-block form-sz-lg text-white">
                        <b>
                          <i class="fas fa-signature fa-fw fa-lg"></i> Generate Mail Signature
                        </b>
                      </button>
          					</div>
          				</div>
                  @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <small class="no-case {{$no == 1 ? 'text-bnb-orange' : 'text-bnb-blue'}}"><i class="fas fa-exclamation-circle"></i>  {{ $error }}</small><br>
                    @endforeach
                  @endif

          			</form>
          		</div>
          		<div>
          			<p class="search-notification {{$no == 1 ? 'text-white' : ''}}">
          				<i class="far fa-bell fa-fw fa-2x"></i>Notification : 
          				<br>
          				Mail Signature Generator will generate your mail signature based on the contact information that you have provided in the Employee Directory. Please make sure your information in Employee Directory is updated.
          			  <br>
                  <br>
                  <div class="row">
                    <div class="col-md-3">
                      <a href="{{ route('get_search_path') }}" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white"><b> <i class="fas fa-chevron-left"></i> Back to Employee Directory</b></a>
                    </div>
                  </div>
                </p>
          		</div>
        	</div>
      	</section>
    </div>
@endsection