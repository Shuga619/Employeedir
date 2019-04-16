@extends('layouts.frontend_doa')

@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} fixed-top" id="sideNav">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top">
        	<span class="d-block d-lg-none">Bhutan National Bank Limited | Delegation of Authority</span>
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
            			Delegation of Authority 
            		</h3>
          		</li>
              <li class="nav-item mb-5">
              <form>
                <select class="form-control mb-4">
                  <option>Select Vertical</option>
                  @foreach($verticals as $v)
                    <option>{{ $v->name }} Vertical</option>
                  @endforeach
                </select>
                <button class="btn btn-block {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}} {{$no == 1 ? 'text-bnb-orange' : 'text-bnb-blue'}}">View DOA</button>
              </form>
              </li>
          		<li class="nav-item">
          			<small class="text-white"><b>Built By : <br> BNBL IT Department <br>2019</b></small>
          		</li>
        	</ul>
      	</div>
    </nav>

    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column">
        	<div class="my-auto">
          		<h1 class="mb-5"> 
            		Bhutan National Bank Limited
          		</h1>
          		<h2 class="no-case mb-5">Vertical and Department wise Delegation of Authority can be viewed here. Select the Vertical from the dropdown menu.</h2>
          		<div class="mb-5">
          		  <section class="py-5">
                  <div class="row">

                  </div>
                </section>
          		</div>
        	</div>
      	</section>
    </div>
@endsection