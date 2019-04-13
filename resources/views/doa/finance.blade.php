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
      	<section class="search-section p-3 p-lg-5">
        	<h2>Finance Vertical Degegation of Authority</h2>
          <h3>Acronym</h3>
          <div class="mb-4">
            <div class="row">
              <div class="col-sm-6">ECC - Executive Credit Committee</div>
              <div class="col-sm-6">CEO - Chief Executive Officer</div>
            </div>
            <div class="row">
              <div class="col-sm-6">Dy. CEO - Deputy Chief Executive Officer</div>
              <div class="col-sm-6">CCO - Chief Credit Officer</div>
            </div>
            <div class="row">
              <div class="col-sm-6">EOI - Extension Office Incharge</div>
            </div>
          </div>
          <table class="table table-hover">
            <thead>
              <th>Sl. #</th>
              <th>Activities</th>
              <th>Delegated To</th>
              <th>Authority</small></th>
              <th>Remarks</th>
            </thead>
            <tfoot>
              <th>Sl. #</th>
              <th>Activities</th>
              <th>Delegated To</th>
              <th>Authority</small></th>
              <th>Remarks</th>
            </tfoot>
            <tbody>
              <tr class="bg-bnb-orange text-white">
                <td colspan="5">HR and Administration related functions within the Finance Vertical</td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>1</td>
                <td colspan="4">Trainings and working team nomination</td>
              </tr>
              <tr>
                <td rowspan="2">1.1</td>
                <td rowspan="2">For In-house</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2">1.2</td>
                <td rowspan="2">For In-Country</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2">1.3</td>
                <td rowspan="2">For ex-country</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td rowspan="2" class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="HoD to nominnate upon discussion with the CFO"></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td rowspan="4">1.4</td>
                <td rowspan="4">Nomination of representative for in-house workshops & projects</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>In-charge Treasury</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">PMS</td>
              </tr>
              <tr>
                <td rowspan="4">2.1</td>
                <td rowspan="4">Preparation of Goal Sheet</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>In-charge Treasury</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="4">2.2</td>
                <td rowspan="4">Proposal on staff ratings</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" rowspan="4" data-toggle="tooltip" data-placement="left" title="HoD will have discussion with the employees at HO and compile branch BAOs' ratings. Prepare final ratings and discuss with CFO"></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>In-charge Account</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>In-charge Treasury</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>2.3</td>
                <td>Final PMS</td>
                <td>EMC / CEO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Employee Related</td>
              </tr>
              <tr>
                <td rowspan="2">3.1</td>
                <td rowspan="2">Tour approval</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td rowspan="2" class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="HoD can approve upon discussion with the CFO"></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td rowspan="2">3.2</td>
                <td rowspan="2">Tour bill approval</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2">3.3</td>
                <td rowspan="2">Leave approval (CL/EL/ML/PL)</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td rowspan="2" class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="Leave for HoD to be approved by CFO"></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>3.4</td>
                <td>Approoval of Leave encashment</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3.5</td>
                <td>Approval of EOL/Study Leave</td>
                <td>EMC / CEO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.6</td>
                <td>Approval for requisition made for consumables, stationaries, stores etc</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.7</td>
                <td>Salary Undertaking to other FIs</td>
                <td>CRO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Manpower Requisition</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Requisition</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2">4.2</td>
                <td rowspan="2">Approval</td>
                <td>EMC / CEO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2">4.3</td>
                <td rowspan="2">Approval for change in CBS user ID</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>


              <tr class="bg-bnb-orange text-white">
                <td colspan="5">General (Applicable to all the Departments within the Finance Vertical)</td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>1</td>
                <td colspan="4">Policy & SOP</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Policy approval</td>
                <td>BoD</td>
                <td>Full Power</td>
                <td title="The policy to be validated by Risk Department prior to appraising the BoDs" class="bg-bnb-orange" data-toggle="tooltip" data-placement="left"></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>SOPs approval</td>
                <td>EMC / CEO</td>
                <td>Full Power</td>
                <td title="The policy to be validated by Risk Department prior to appraising the executives" class="bg-bnb-orange" data-toggle="tooltip" data-placement="left"></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Department Budget</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>Preparation of Capex & Opex requirements</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.2</td>
                <td>Validation of CAPEX and OPEX requirements</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.3</td>
                <td>Approval of CAPEX and OPEX</td>
                <td></td>
                <td></td>
                <td class="bg-bnb-orange" title="CAPEX and OPEX to be by BoD" data-toggle="tooltip" data-placement="left"></td>
              </tr>
              <tr>
                <td>2.4</td>
                <td>Requisition of consumer items</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-orange text-white">
                <td>2.5</td>
                <td colspan="4">Supplementary budget</td>
              </tr>
              <tr>
                <td>2.5.1</td>
                <td>Proposal for supplementary budget</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.5.2</td>
                <td>Approval of suplementary budget</td>
                <td>EMC / CEO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-orange">
                <td colspan="5"></td>
              </tr>
              <tr>
                <td rowspan="2">2.6</td>
                <td rowspan="2">Reappropriation of budget</td>
                <td>EMC / CEO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>CFO</td>
                <td>Full Power</td>
                <td></td>
              </tr>


              <tr class="bg-bnb-orange text-white">
                <td colspan="5">Applicable to only Finance Department</td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>1</td>
                <td colspan="4">Loan Initiation & Disbursement</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Disbursement to CASA or credit to Routine account</td>
                <td>Authorizer</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="Provided the loans are initiated in the CBS as per the details provided in the approved LDO."></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>ODWC Renewal</td>
                <td>Authorizer</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="As per the LDO"></td>
              </tr>
              <tr>
                <td>1.3</td>
                <td>Rescheudling, Restructuring and renewal of loans & advances</td>
                <td>Authorizer</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="As per the LDO"></td>
              </tr>

              <tr class="bg-bnb-orange text-white">
                <td>1.4</td>
                <td colspan="4">Loan Disbursement through Cheques</td>
              </tr>
              <tr>
                <td>1.4.1</td>
                <td>Authorization of Payment Voucher</td>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="3">1.4.2</td>
                <td rowspan="3">Cheque Signing</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td rowspan="3" title="One of the signatories to be from other vertical." data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td> Upto Nu. Five million</td>
              </tr>
              <tr>
                <td>In-charge Account</td>
                <td> Upto Nu. one million</td>
              </tr>
              <tr class="bg-bnb-orange">
                <td colspan="5"></td>
              </tr>
              <tr>
                <td>1.5</td>
                <td>Loan write offs</td>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="Based on approved notesheet from Legal or relevant department"></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Bill Payments</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>Signing of all PVs & JVs</td>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td title="All vouchers to be signed by In-Charge, Accounts" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td rowspan="3">2.2</td>
                <td rowspan="3">Signing of Cheque</td>
                <td>CFO</td>
                <td>Full Power</td>
                <td rowspan="3" class="bg-bnb-orange" title="Accountability to be based on the signing authority" data-toggle="tooltip" data-placement="left"></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td> Upto Nu. Five million</td>
              </tr>
              <tr>
                <td>In-charge Account</td>
                <td> Upto Nu. one million</td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Employee Related Payments</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Leave Encashment to all the employees</td>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" title="Based on the approved leave encashment form from respective Department head and head, HRA" data-toggle="tooltip" data-placement="left"></td>
              </tr>
              <tr>
                <td>3.2</td>
                <td>Release of travel advance to all the employees</td>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" title="Subject to approval from respective Department head and Head, HRA" data-toggle="tooltip" data-placement="left"></td>
              </tr>
              <tr>
                <td>3.3</td>
                <td>Release of travel bill to all the employees</td>
                <td>In-charge Account</td>
                <td>Full Power</td>
                <td class="bg-bnb-orange" title="Based on approved travel bill from Head, HRA" data-toggle="tooltip" data-placement="left"></td>
              </tr>

              <tr class="bg-bnb-orange text-white">
                <td>3.4</td>
                <td colspan="3">Employee Bonus</td>
                <td title="Based on the approved notesheet from the executives" data-toggle="tooltip" data-placement="left"></td>
              </tr>
            </tbody> 
          </table>
      	</section>
    </div>
@endsection