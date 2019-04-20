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
              <form action="{{ route('get_route_path') }}" method="post">
                @csrf
                <select class="form-control mb-4" name="vid">
                  <option>Select Vertical</option>
                  @foreach($verticals as $v)
                    @if($v->code == '300')
                      <option selected="selected" value="{{ $v->code }}">{{ $v->name }} Vertical</option>
                    @else
                      <option value="{{ $v->code }}">{{ $v->name }} Vertical</option>
                    @endif
                  @endforeach
                </select>
                <button type="submit" class="btn btn-block {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}} {{$no == 1 ? 'text-bnb-orange' : 'text-bnb-blue'}}">View DOA</button>
              </form>
              </li>
          		<li class="nav-item">
          			<small class="text-white"><b>Built By : <br> BNBL IT Department <br>2019</b></small>
          		</li>
        	</ul>
      	</div>
    </nav>

    <div class="container-fluid p-0">
      	<section class="search-section bg-bnb p-3 p-lg-5">
        	<h2>Operation Vertical Degegation of Authority</h2>
          <h3>Acronyms</h3>
          <div class="mb-4">
            <div class="row">
              <div class="col-sm-6">CEO - Chief Executive Officer</div>
              <div class="col-sm-6">EMC - Executive Management Committee</div>
            </div>
            <div class="row">
              <div class="col-sm-6">Dy. CEO - Deputy Chief Executive Officer</div>
              <div class="col-sm-6">COO - Chief Operation Officer</div>
            </div>
            <div class="row">
              <div class="col-sm-6">HoD - Head of Department</div>
              <div class="col-sm-6">EOI - Extension Office Incharge</div>
            </div>
            <div class="row">
              <div class="col-sm-6">IB - International Banking</div>
            </div>
          </div>

          <ul class="nav nav-pills">
            <li class="active p-5"><a data-toggle="pill" href="#administration"><h4 class="text-bnb-blue">Administration</h4></a></li>
            <li class="p-5"><a data-toggle="pill" href="#domesticbanking"><h4 class="text-bnb-blue">Domestic Banking</h4></a></li>
            <li class="p-5"><a data-toggle="pill" href="#internationalbanking"><h4 class="text-bnb-blue">International Banking</h4></a></li>
            <li class="p-5"><a data-toggle="pill" href="#vas"><h4 class="text-bnb-blue">VAS</h4></a></li>
          </ul>
          
          <div class="tab-content">
            <div id="administration" class="tab-pane in active">
              <h3>General DOA for Administration</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </tfoot>
                <tbody>
                  <tr class="bg-bnb-blue text-white">
                    <td>1</td>
                    <td colspan="4">Vehicle (Cash Van)</td>
                  </tr>
                  <tr>
                    <td rowspan="2">1.1</td>
                    <td rowspan="2">For operating expenses (Maintenance/Spare parts)</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="2">1.2</td>
                    <td rowspan="2">Fuel</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="2">1.3</td>
                    <td rowspan="2">Insurance/Fitness charges</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                  </tr>


                  <tr class="bg-bnb-blue text-white">
                    <td>2</td>
                    <td colspan="4">Communication Cost</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.1</td>
                    <td rowspan="2">Local postage</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.2</td>
                    <td rowspan="2">International postage</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="3">2.3</td>
                    <td rowspan="3">Legal Stamp</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="3" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Credit Incharge</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>2.4</td>
                    <td>Phone/fax/internet connectivity</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>3</td>
                    <td colspan="4">Establishment  cost</td>
                  </tr>
                  <tr>
                    <td rowspan="2">3.1</td>
                    <td rowspan="2">Rent</td>
                    <td>Branch Manager</td>
                    <td>Negotiation and Disbursement</td>
                    <td rowspan="2" title="Negotiation done  by the BM & approved by the HO Committee. Disbursement done by BM. Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>HO Committee</td>
                    <td>Approval</td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td>Rates (land tax)</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Properties owned by the bank under municipal areas" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>3.3</td>
                    <td>Security Expense (DSA)</td>
                    <td>Branch Manager <br><small>(Thimphu & Samtse)</small></td>
                    <td>Full Power</td>
                    <td title="Salary done from HO." data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>3.4</td>
                    <td>Insurance (office space & ATMs)</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>3.5</td>
                    <td>Repairs/maintenance</td>
                    <td></td>
                    <td></td>
                    <td title="In line with the procurement policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>3.6</td>
                    <td>Electricity</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>3.7</td>
                    <td>Water Charges</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>3.8</td>
                    <td>Printed material/ Stationeries</td>
                    <td></td>
                    <td></td>
                    <td title="Subject to approved budget provision; in line with procurement policy of the bank" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td rowspan="2">3.9</td>
                    <td rowspan="2">Branch/ ATM/ Extensions Opening Expenses</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Upto Nu. 50,000</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>4</td>
                    <td colspan="4">Travelling Cost</td>
                  </tr>
                  <tr>
                    <td rowspan="5">4.1</td>
                    <td rowspan="5">Local Travel</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td rowspan="5" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Dy. CEO</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>HoD</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="5">4.2</td>
                    <td rowspan="5">Conveyance Expense</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td rowspan="5" title="Subject to approved budget provision" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Dy. CEO</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>HoD</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="2">4.3</td>
                    <td rowspan="2">Foreign travel</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Dy. CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>5</td>
                    <td colspan="4">Brand Building Cost</td>
                  </tr>
                  <tr>
                    <td>5.1</td>
                    <td>Advertisement</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Local Channel" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>5.2</td>
                    <td>Entertainment</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Within the approved Budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td rowspan="2">5.3</td>
                    <td rowspan="2">Gifts</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Within the approved Budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Dy. ECO</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>5.4</td>
                    <td>Sponsorship -- Part of CSR</td>
                    <td>Branch Manager</td>
                    <td>Upto 10,000.00/instance, subject to max  5 times/year</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>5.5</td>
                    <td>Bank Promotion Charges</td>
                    <td></td>
                    <td></td>
                    <td title="Within the approved Budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>6</td>
                    <td colspan="4">HRD Cost</td>
                  </tr>
                  <tr>
                    <td rowspan="2">6.1</td>
                    <td rowspan="2">Newspaper/Periodicals</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Within the approved Budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Full Power</td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>7</td>
                    <td colspan="4">Other Cost</td>
                  </tr>
                  <tr>
                    <td>7.1</td>
                    <td>Computer Running Expense/Stores</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Emergency purchase upto. 5,000.00" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>

                  <tr>
                    <td rowspan="3">7.2</td>
                    <td rowspan="3">Other Bank Charges</td>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                    <td rowspan="3" title="Only to Corporate BM" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>HoD</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>7.3</td>
                    <td>Depreciation</td>
                    <td></td>
                    <td></td>
                    <td title="Within the approved Budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td rowspan="4">7.4</td>
                    <td rowspan="4">Net off of Recievable/Payable</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Chief Officer</td>
                    <td>5,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>HoD</td>
                    <td>2,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>2,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">7.5</td>
                    <td rowspan="2">Misc Expense</td>
                    <td>Branch Manager</td>
                    <td>Upto max of 10,000.00</td>
                    <td rowspan="2" title="Within the approved Budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Upto max of 5,000.00</td>
                  </tr>
                </tbody>
              </table>
            </div>


            <div id="domesticbanking" class="tab-pane fade">
              <h3>DOA for Domestic Banking Department</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </tfoot>
                <tbody>
                  <tr class="bg-bnb-blue text-white">
                    <td>1</td>
                    <td colspan="4">Withdrawal/Deposit</td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td>Auto Authorization of cash deposit</td>
                    <td>Tellers</td>
                    <td>Upto 100,000.00</td>
                    <td title="Due diligence required as usual" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td>Acceptance of Cheque Deposit</td>
                    <td>Tellers</td>
                    <td>Full Power</td>
                    <td title="Due diligence required as usual" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td rowspan="6">1.3</td>
                    <td rowspan="6">Cash withdrawal through cheque/withdrawal slip (Verification)</td>
                    <td>Branch Manager</td>
                    <td>Beyond Nu. 1,000,000.00</td>
                    <td rowspan="6" title="Due diligence required as usual" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Nu. 500,001.00 to Less than Nu. 1,000,000.00</td>
                  </tr>
                  <tr>
                    <td>International Banking Incharge/BOI</td>
                    <td>Nu. 500,001.00 to Less than Nu. 1,000,000.00</td>
                  </tr>
                  <tr>
                    <td>Chief tellers/Banking Officer</td>
                    <td>Nu. 50,001.00 to Less than Nu. 500,000.00</td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Extension Incharge</td>
                  </tr>
                  <tr>
                    <td>Tellers</td>
                    <td>Auto auth Upto 50,000.00</td>
                  </tr>
                  <tr>
                    <td rowspan="5">1.4</td>
                    <td rowspan="5">Reversal entries</td>
                    <td>Branch Manager</td>
                    <td>Above 500,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Upto 500,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>International Banking Incharge/BOI</td>
                    <td>Upto 500,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Chief tellers/Banking Officer</td>
                    <td>Upto 50,000.00 with JV</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>FP (with JV)</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1.5</td>
                    <td>Withdrawal of Cash handling allowances</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="authorized to approve in the event of resignation, retirement, termination or transfer to different division/ department and withdrawal of such accounts (after due process). However the accumulated cash allowance is to be kept in the account for a period for 6 months in the event of resignation, retirement, termination or transfer to different division/department" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td rowspan="2">1.6</td>
                    <td rowspan="2">Verifiers are out of office for short meeting or for some work.</td>
                    <td>Branch Manager</td>
                    <td>BM to delegate</td>
                    <td rowspan="2" title="SOP to be provisioned" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>EOI to delegate</td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>2</td>
                    <td colspan="4">Loan Deposit payment (LDPM)</td>
                  </tr>
                  <tr>
                    <td>2.1</td>
                    <td>Reversal entries</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="On written request & justification given by Credit officer/Recovery/BM/BOI" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>2.2</td>
                    <td>Back dated Entries</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>3</td>
                    <td colspan="4">Fund Transfer</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td>Request via mail</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="With due deligence" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>4</td>
                    <td colspan="4">TT/DD</td>
                  </tr>
                  <tr>
                    <td rowspan="4">4.1</td>
                    <td rowspan="4">Issuance of DDs</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="4" title="Verification by the respective authority" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Chief tellers/Banking Officer</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Tellers</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="4">4.2</td>
                    <td rowspan="4">Issuance of TTs</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="4" title="Verification by the respective authority" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Chief tellers/Banking Officer</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Tellers</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td rowspan="5">4.3</td>
                    <td rowspan="5">Cancellation of DDs</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="5" title="Verification by the respective authority" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Chief tellers/Banking Officer</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>Tellers</td>
                    <td>Full Power</td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>5</td>
                    <td colspan="4">FD/TD/RD</td>
                  </tr>
                  <tr>
                    <td>5.1</td>
                    <td>Back dated/Reversal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>5.2</td>
                    <td>Interest Rate negotiation/revision</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>6</td>
                    <td colspan="4">Cash Management</td>
                  </tr>
                  <tr>
                    <td rowspan="2">6.1</td>
                    <td rowspan="2">Requisition of cash</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>6.2</td>
                    <td>Sale/buy of Forex to/from RMA</td>
                    <td rowspan="4">Treasury</td>
                    <td rowspan="4">Full Power</td>
                    <td title="Treasury Policy will cover; Physical transaction by Branch" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange" rowspan="4"></td>
                  </tr>
                  <tr>
                    <td>6.3</td>
                    <td>Increase/decrease in Retenetion limit</td>
                  </tr>
                  <tr>
                    <td>6.4</td>
                    <td>Insurance for cash in safe/transit</td>
                  </tr>
                  <tr>
                    <td>6.5</td>
                    <td>Maintaining balances with other banks & RMA</td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>7</td>
                    <td colspan="4">Cash Management</td>
                  </tr>
                  <tr>
                    <td rowspan="3">7.1</td>
                    <td rowspan="3">Signing of cheques and bank payment advice</td>
                    <td>Dy. CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>7.2</td>
                    <td>Addition or deletion of authorized signatories</td>
                    <td></td>
                    <td></td>
                    <td title="Approval based on notesheet" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>8</td>
                    <td colspan="4">EO Operation</td>
                  </tr>
                  <tr>
                    <td rowspan="3">8.1</td>
                    <td rowspan="3">EO operated by single person and sharing passwords</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Dy. CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>9</td>
                    <td colspan="4">Standard Operating Procedures</td>
                  </tr>
                  <tr>
                    <td rowspan="2">9.1</td>
                    <td rowspan="2">Review, Ammend & propose</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.2</td>
                    <td>Approval</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>10</td>
                    <td colspan="4">Fees, Commission & Charges</td>
                  </tr>
                  <tr>
                    <td rowspan="2">10.1</td>
                    <td rowspan="2">Review, Ammend & propose</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>10.2</td>
                    <td>Approval</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>11</td>
                    <td colspan="4">Issuance of VISA letter/ ac statement</td>
                  </tr>
                  <tr>
                    <td>11.1</td>
                    <td>VISA letter & Statement</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td title="Preparation by JC/BOI & verification by BM" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td rowspan="2">11.2</td>
                    <td rowspan="2">Signed Ac Statement</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td rowspan="2" title="Joint Signatory of BM & BOI/CT" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Full Power</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div id="internationalbanking" class="tab-pane fade">
              <h3>DOA for International Banking Department</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </tfoot>
                <tbody>
                  <tr class="bg-bnb-blue text-white">
                    <td>1</td>
                    <td colspan="4">Outward Remittances</td>
                  </tr>
                  <tr>
                    <td rowspan="3">1.1</td>
                    <td rowspan="3">INR RTGs/TTs/DDs (Authentication)</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>More than 500,000.00</td>
                    <td rowspan="3" title="To authenticate the entries in the ARD/INDIALINK SYSTEM with the forms." data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                  <tr>
                    <td>Extension Incharge</td>
                    <td>Upto 1,000,000.00</td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Upto 500,000.00</td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td>Forex TT (Input)</td>
                    <td>IB Assistant</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1.3</td>
                    <td>Forex TT (Authorize)</td>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="4">1.4</td>
                    <td rowspan="4">Swift (Input)</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Extension Incharge</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>SWIFT</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">1.5</td>
                    <td rowspan="2">Swift (Authorize)</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">1.6</td>
                    <td rowspan="2">Cancellation of DDs</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Extension Incharge</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>2</td>
                    <td colspan="4">Inward Remittances</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.1</td>
                    <td rowspan="2">IINR RTGs/NEFTs</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">2.2</td>
                    <td rowspan="3">Forex (Tour Payment)</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Assistant (INPUT)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">2.3</td>
                    <td rowspan="3">Forex (Personal)</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Above 3,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Upto 3,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Assistant (INPUT)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">2.4</td>
                    <td rowspan="3">Forex (NGO)</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Above 10,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Upto 10,000.00</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Assistant (INPUT)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">2.5</td>
                    <td rowspan="3">Forex (FDI)</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Assistant (INPUT)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">2.6</td>
                    <td rowspan="3">MoneyGram</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Assistant (INPUT)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="4">2.7</td>
                    <td rowspan="4">Incomplete Beneficiary details (Indemnity Form)</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Assistant (INPUT)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>3</td>
                    <td colspan="4">LC (Letter of Credit)</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td>With 25% Margin Money & 75% Block Amount</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td>With 25% Margin Money & undertaking from FIS for 75%</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.3</td>
                    <td rowspan="3">With 25% Margin Money &  75% payment on arrival</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Dy. CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.4</td>
                    <td>With 25% Margin Money &  75% backed by property</td>
                    <td>Processed as a credit facility</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.5</td>
                    <td rowspan="3">Negotiation of Fees/ Commissions/Margin Money</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Dy. CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.6</td>
                    <td>Others</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.7</td>
                    <td>Export LC</td>
                    <td>Branch Manager</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>4</td>
                    <td colspan="4">Correspondent Banking</td>
                  </tr>
                  <tr>
                    <td>4.1</td>
                    <td>Establishment of RMA</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4.2</td>
                    <td>Opening of Nostro account</td>
                    <td>CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4.3</td>
                    <td>Correspondent Bank Due deligence</td>
                    <td>HoD <br> <small>(Compliance)</small> </td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>5</td>
                    <td colspan="4">FC release</td>
                  </tr>
                  <tr>
                    <td rowspan="3">5.1</td>
                    <td rowspan="3">Release of TA/DA</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Assistant (INPUT)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                   <tr>
                    <td rowspan="2">5.2</td>
                    <td rowspan="2">Reversal-to rectify the entries (JV) no financial impact</td>
                    <td>International Banking Incharge/BOI</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>5.3</td>
                    <td>Reversal-to rectify the entries (JV) financial Impact</td>
                    <td>Chief Officer</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div id="vas" class="tab-pane fade">
              <h3>DOA for VAS Department</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Category of Power</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </tfoot>
                <tbody>
                  <tr>
                    <td rowspan="7">1</td>
                    <td rowspan="7">Updation of Customer Information</td>
                    <td>Branch Manager</td>
                    <td>Auth - Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Auth - Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>International Banking Incharge/BOI</td>
                    <td>Auth - Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Chief tellers/Banking Officer</td>
                    <td>Auth - Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Auth - Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Auth - Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Tellers</td>
                    <td>Entry - Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="7">2</td>
                    <td rowspan="7">Updation of VAS details</td>
                    <td>Branch Manager</td>
                    <td>Auth - Full Power</td>
                    <td title="*Includes VAS Officers- Due Diligence required as usual" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange" rowspan="7"></td>
                  </tr>
                  <tr>
                    <td>Branch Operations Incharge</td>
                    <td>Auth - Full Power</td>
                  </tr>
                  <tr>
                    <td>International Banking Incharge/BOI</td>
                    <td>Auth - Full Power</td>
                  </tr>
                  <tr>
                    <td>Chief tellers/Banking Officer</td>
                    <td>Auth - Full Power</td>
                  </tr>
                  <tr>
                    <td>EOI</td>
                    <td>Auth - Full Power</td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer</td>
                    <td>Auth - Full Power</td>
                  </tr>
                  <tr>
                    <td>Tellers</td>
                    <td>Entry - Full Power</td>
                  </tr>

                  <tr>
                    <td rowspan="4">3</td>
                    <td rowspan="4">Recon</td>
                    <td>Chief Officer</td>
                    <td>Auth - Full Power</td>
                    <td title="For all recon issues as per available documents. Deviations auth by Chief" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange" rowspan="4"></td>
                  </tr>
                  <tr>
                    <td>HoD <br> <small>VAS Head</small></td>
                    <td>Auth - Full Power</td>
                  </tr>
                  <tr>
                    <td>EOI <br> <small>VAS I/C</small></td>
                    <td>Auth - Full Power</td>
                  </tr>
                  <tr>
                    <td>IB Officers/Banking Officer <br> <small>VAS Officers</small></td>
                    <td>Entry - Full Power</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      	</section>
    </div>
@endsection