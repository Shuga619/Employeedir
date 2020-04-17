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
          		<div class="mb-3">
          			@if($flag)
                  <div class="row">
                    <div class="col-md-9">
                      <textarea class="form-control" rows="10"><div>Thank you &amp; have a pleasant day,</div>
<div><span style="font-family: tahoma, 'new york', times, serif;">Best regards,</span></div>
<div>
<table style="table-layout: fixed; height: 200px; width: 600px;">
<tbody>
<tr>
<td>
<p style="margin: 0px; line-height: 115%;"><strong><span style="font-size: 13.0pt; line-height: 115%; font-family: 'Century Gothic',sans-serif; color: black;">{{$emp->name}} </span></strong><span style="font-size: 8.5pt; line-height: 115%; font-family: 'Century Gothic',sans-serif; color: black;"><br /> </span><span style="font-size: 11pt;"><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">{{$emp->title}} [{{$emp->designation}}]</span><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;"><br /> </span><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">{{$emp->department->name}} Department</span></span></p>
<p style="margin: 0px; line-height: 115%;"><span style="font-size: 8.5pt; line-height: 115%; font-family: 'Verdana',sans-serif; color: black;">&nbsp;</span></p>
<p style="line-height: 115%; margin: 0px;"><span style="font-size: 13pt;"><strong><span style="line-height: 115%; font-family: 'Raleway ExtraBold', sans-serif; color: black;">BHUTAN NATIONAL BANK LIMITED</span></strong></span><span style="font-size: 8.5pt; line-height: 115%; font-family: 'Verdana',sans-serif; color: black;"><br /> </span><span style="font-size: 11pt;"><strong><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">T :</span></strong><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">&nbsp;+975 2 334 933 |&nbsp;<strong>IP :</strong>&nbsp;{{$emp->contact->extension}}</span><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;"><br /> </span><strong><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">M :</span></strong><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">&nbsp;+975 {{$emp->contact->mobile}}</span><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;"><br /> </span><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">{{$office}}: Post Box No: 439</span><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;"><br /> </span><span style="line-height: 115%; font-family: 'Century Gothic', sans-serif; color: black;">{{$loc}} | Kingdom of Bhutan</span></span></p>
</td>
<td><a href="https://www.bnb.bt" target="_blank"><img src="/home/{{$emp->contact->email}}/Briefcase/BNB-email-signature.png" dfsrc="doc:Briefcase/BNB-email-signature.png" width="220" height="175" /></a></td>
</tr>
</tbody>
</table>
<div>
<p style="margin: 0px;"><span style="font-family: 'Century Gothic', sans-serif; font-size: 9pt; color: #808080;">The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.</span></p>
</div>
</div></textarea>
                      <p class="text-white small"> Copy the above code and paste it in your mail signature setting.</p>
                    </div>
                    <div class="col-md-3">
                      <h4 class="no-case {{$no == 1 ? 'text-white' : ''}}">Mail Signature Image</h4>
                      <p class="text-white">Click the button below to download the mail signature image.</p>
                      <p class="text-white small"> Download the image and upload it in your Zimbra Mail Briefcase.</p>
                      <a href="{{ asset('images/BNB-email-signature.png') }}" download="BNB-email-signature.png">
                        <button type="submit" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-block form-sz-lg text-white">
                          <b>
                            <i class="fas fa-cloud-download-alt fa-fw fa-lg"></i> Download
                          </b>
                        </button>
                      </a>
                    </div>
                  </div>
                @else

                  <h5 class="mb-5 no-case {{$no == 1 ? 'text-white' : ''}}" style="font-family: century gothic"> 
                    404 | No Record Found<br>
                    <small>Could not find any details for the entered Employee ID. Please check your Employee ID and make sure your information is registered in Employee Directory.</small>
                  </h5>
                @endif
          		</div>
          		<div>
          			<p class="search-notification {{$no == 1 ? 'text-white' : ''}}">
          				<!-- <i class="far fa-bell fa-fw fa-2x"></i>Notification : 
          				<br>
          				notification here -->
                  <div class="row">
                    <div class="col-md-3">
                      <a href="{{ route('sign_index_path') }}" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white"><b> <i class="fas fa-chevron-left"></i> Back to Mail Signature Generator </b></a>
                    </div>
                    <div class="col-md-3 offset-md-6">
                      <a href="{{ route('get_search_path') }}" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white"><b> <i class="fas fa-chevron-left"></i> Back Employee Directory </b></a>
                    </div>
                  </div>
                </p>
          		</div>
        	</div>
      	</section>
    </div>
@endsection