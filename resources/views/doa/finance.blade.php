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
                    @if($v->code == '200')
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

    <div class="container-fluid bg-bnb p-0">
      	<section class="search-section p-3 p-lg-5">
        	<h2>Finance Vertical Degegation of Authority</h2>
          <h3>Acronyms</h3>
          <div class="mb-4">
            <div class="row">
              <div class="col-sm-6">BoD - Board of Director</div>
              <div class="col-sm-6">EMC - Executive Management Committee</div>
            </div>
            <div class="row">
              <div class="col-sm-6">ALCO - </div>
              <div class="col-sm-6">CFO - Chief Finance Officer</div>
            </div>
            <div class="row">
              <div class="col-sm-6">HoD - Head of Department</div>
              <div class="col-sm-6">AML/CFT - </div>
            </div>
            <div class="row">
              <div class="col-sm-6">CRO - Chief Resource Officer</div>
            </div>
          </div>

          <ul class="nav nav-pills">
            <li class="active p-5"><a data-toggle="pill" href="#general"><h4 class="text-bnb-blue">General DOA</h4></a></li>
            <li class="p-5"><a data-toggle="pill" href="#finance"><h4 class="text-bnb-blue">Finance Department</h4></a></li>
            <li class="p-5"><a data-toggle="pill" href="#risk"><h4 class="text-bnb-blue">Risk Department</h4></a></li>
            <li class="p-5"><a data-toggle="pill" href="#review"><h4 class="text-bnb-blue">Review Department</h4></a></li>
          </ul>
          
          <div class="tab-content">
            <div id="general" class="tab-pane in active">
              <h3>General DOA for Finance Vertical</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
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
                </tbody>
              </table>
            </div>


            <div id="finance" class="tab-pane fade">
              <h3>DOA for Finance Department</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </tfoot>
                <tbody>
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
                  <tr>
                    <td>3.4.1</td>
                    <td>Approval of kitty amount</td>
                    <td></td>
                    <td></td>
                    <td class="bg-bnb-orange" title="BoD approves the kitty bonus month(s) based on the Bonus matrix" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>3.4.2</td>
                    <td>Approval of approach to bonus distribution</td>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.4.3</td>
                    <td>Calculation of eligibile bonus amount</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="The eligible bonus amount for emloyee is calculated based on the approved bonus kitty month(s) by the BoD and distribution approach approved by the executives" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>3.4.4</td>
                    <td>Approval for disbursement of Bonus</td>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="The executive approves" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>3.4.5</td>
                    <td>Disbursement of Bonus to all the employees</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Based on the approved calculation" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr class="bg-bnb-orange">
                    <td colspan="5"></td>
                  </tr>
                  <tr>
                    <td>3.5</td>
                    <td>Disbursement of LTC</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Based on the release letter from HRA" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>3.6</td>
                    <td>Disbursement of medical advance and medical claim</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Based on approval from HRA" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.7</td>
                    <td rowspan="3">Misc. Expenses</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td rowspan="3" class="bg-bnb-orange" title="Based on approval from HRA and/or respective HoD." data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>HoD</td>
                    <td>Full Power</td>
                  </tr>
                  <tr>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>4</td>
                    <td colspan="4">Payroll</td>
                  </tr>
                  <tr>
                    <td>4.1</td>
                    <td>Disbursement of monthly salary</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="upon validation with the HRA" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>4.2</td>
                    <td>Deduction and adjustment from Salary</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Based on the instruction from relevant department(s) and deduction letter from other FIs" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>4.3</td>
                    <td>Salary Advance to all employees</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Based on approved Salary advance form by Head, HRA" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>4.4</td>
                    <td>Remittance of salary related TDs</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4.5</td>
                    <td>Issuance of employee's TDs certificate</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>5</td>
                    <td colspan="4">Retirement benefits</td>
                  </tr>
                  <tr>
                    <td>5.1</td>
                    <td>Approval of post service benefits</td>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="The note sheet for post service benefit will be raised by HoD and circuclated for approval from the executives." data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>5.2</td>
                    <td>Adjustment of dues & disbursement of final benefits</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Based on the approved notesheet" data-toggle="tooltip" data-placement="left"></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>6</td>
                    <td colspan="4">Corporate Tax</td>
                  </tr>
                  <tr>
                    <td>6.1</td>
                    <td>Computation of CIT</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Based on the Income Tax rules and upon validation by the Statutory Auditors" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>6.2</td>
                    <td>Approval for payment</td>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>6.3</td>
                    <td>Disbursement of Tax to RRCO</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="based on approved note sheet" data-toggle="tooltip" data-placement="left"></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>7</td>
                    <td colspan="4">Financials</td>
                  </tr>
                  <tr>
                    <td>7.1</td>
                    <td>Preperation of montly, quarterly and Half yearly financials</td>
                    <td>Officer(s)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>7.2</td>
                    <td>Validation of above financials</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">7.3</td>
                    <td rowspan="2">Preperation/compilation of year end financials both under preivious GAAP and BAS</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Officer(s)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>7.4</td>
                    <td>Approval of final accounts</td>
                    <td></td>
                    <td></td>
                    <td class="bg-bnb-orange" title="Board Audit committee" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr class="bg-bnb-blue text-white">
                    <td>8</td>
                    <td colspan="4">Budgeting</td>
                  </tr>
                  <tr>
                    <td>8.1</td>
                    <td>Prepare template for Target/Budget: Department and Branch</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>8.2</td>
                    <td>Compilation of financial target</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="HoD to compile proposals from Departments and Branches and prepare a final proposal for the Bank" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>8.3</td>
                    <td>Validation & approval</td>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Aproval on the proposed target for presentation to the Board" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>8.4</td>
                    <td>Final approval and endorsement</td>
                    <td></td>
                    <td></td>
                    <td class="bg-bnb-orange" title="BoD has the final authority" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>8.5</td>
                    <td>Distribution of approved target to Departments & branches</td>
                    <td>EMC / CEO</td>
                    <td></td>
                    <td class="bg-bnb-orange" title="Executive, HoDs and BMs upon discussion will agree on the distribution." data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr class="bg-bnb-orange text-white">
                    <td>8.6</td>
                    <td colspan="4">Suplpementary budget</td>
                  </tr>
                  <tr>
                    <td>8.6.1</td>
                    <td>Additional</td>
                    <td></td>
                    <td></td>
                    <td class="bg-bnb-orange" title="BoD has to approve" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>8.6.2</td>
                    <td>Reappropriation</td>
                    <td>EMC / CEO</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-orange">
                    <td colspan="5"></td>
                  </tr>
                  <tr>
                    <td>8.7</td>
                    <td>Proposal for CAPEX items for the department</td>
                    <td>HoD</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>8.8</td>
                    <td>Approval of CAPEX items</td>
                    <td>EMC / CEO</td>
                    <td></td>
                    <td class="bg-bnb-orange" title="BoD (case by case basis)" data-toggle="tooltip" data-placement="left"></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>9</td>
                    <td colspan="4">Treasury & ALM</td>
                  </tr>
                  <tr>
                    <td>9.1</td>
                    <td>Develop policies and process manual</td>
                    <td>In-charge Treasury</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.2</td>
                    <td>Approval of policies and process manual</td>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="Policies to be approved by full board" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>9.3</td>
                    <td>Review and amend policies and process manual</td>
                    <td>In-charge Treasury</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.4</td>
                    <td>Develop financial budget and plans</td>
                    <td>In-charge Treasury</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">9.5</td>
                    <td rowspan="2">Approval of financial budget and plans</td>
                    <td>BoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">9.6</td>
                    <td rowspan="2">Subscription of Bonds</td>
                    <td>BoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>ALCO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">9.7</td>
                    <td rowspan="2">Issuance of Bonds</td>
                    <td>BoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>ALCO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">9.8</td>
                    <td rowspan="2">Property/Fixed Assets/Equity Investment</td>
                    <td>BoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>ALCO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">9.9</td>
                    <td rowspan="2">Inter-bank borrowings</td>
                    <td>ALCO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">9.10</td>
                    <td rowspan="2">Subcription and Issuance of Money market instruments ( like CP, CD etc)</td>
                    <td>ALCO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="3">9.11</td>
                    <td rowspan="3">Bidding for bills.</td>
                    <td>ALCO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>In-charge Treasury</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.12</td>
                    <td>Funds transfer from & within NOSTRO accounts.</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.13</td>
                    <td>Placement with other commercial banks in Bhutan ( Rates & Term)</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.14</td>
                    <td>Negotitaion of rates on Corporate deposit</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.15</td>
                    <td>Buy and sale of Forex from/to RMA.</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.16</td>
                    <td>Cash lifting</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.17</td>
                    <td>Opening of NOSTRO accounts: Due Diligence</td>
                    <td>AML/CFT</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9.18</td>
                    <td>Opening of NOSTRO accounts: Correspondence & approval from RMA</td>
                    <td>In-charge Treasury</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>


                  <tr class="bg-bnb-blue text-white">
                    <td>10</td>
                    <td colspan="4">Others</td>
                  </tr>
                  <tr>
                    <td>10.1</td>
                    <td>Payment based on approved notesheet</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-orange text-white">
                    <td>10.2</td>
                    <td colspan="4">SWF advance</td>
                  </tr>                  
                  <tr>
                    <td>10.2.1</td>
                    <td>Approval of advance</td>
                    <td>President_SWF</td>
                    <td>Full Power</td>
                    <td class="bg-bnb-orange" title="As per the SWF charter" data-toggle="tooltip" data-placement="left"></td>
                  </tr>
                  <tr>
                    <td>10.2.2</td>
                    <td>Adjustment & disbursement of advance</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-orange"><td colspan="5"></td></tr>

                  <tr class="bg-bnb-orange text-white">
                    <td>10.3</td>
                    <td colspan="4">Reports</td>
                  </tr>                  
                  <tr>
                    <td>10.3.1</td>
                    <td>Preparation of schedules & reconciliation statement</td>
                    <td>Officer(s)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>10.3.2</td>
                    <td>Validation of schedules & reconciliation statement</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>10.3.3</td>
                    <td>Validation of Branch reports & sending feedback</td>
                    <td>In-charge Account</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-orange"><td colspan="5"></td></tr>
                  <tr>
                    <td>10.4</td>
                    <td>ISO Implementation</td>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                </tbody> 
              </table>
            </div>


            <div id="risk" class="tab-pane fade">
              <h3>DOA for Risk Department</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </tfoot>
                <tbody>
                  <tr class="bg-bnb-blue text-white">
                    <td>1</td>
                    <td colspan="4">Monthly Executive Report </td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td>Report preparation/compilation  </td>
                    <td>Officer(s)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">1.2</td>
                    <td rowspan="2">Report validation/approval</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>2</td>
                    <td colspan="4">ERMC and BRMC Meetings</td>
                  </tr>
                  <tr>
                    <td>2.1</td>
                    <td>Conducting BRMC Meetings</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2.2</td>
                    <td>Conducting ERMC Meetings</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>3</td>
                    <td colspan="4">Risk Awareness Workshop</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td>Conducting Risk Awareness/Assessment-Vertical Level</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td>Conducting Risk Awareness/Assessment-Branch/Dept. Level</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.3</td>
                    <td>Executive Level Risk Assessment</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3.4</td>
                    <td>Follow up on action taken report</td>
                    <td>Officer(s)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>4</td>
                    <td>Approval of tolerance limit</td>
                    <td>Board Risk <br>Management <br>Committee</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4.1</td>
                    <td>MLR framework</td>
                    <td>BoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr class="bg-bnb-orange text-white">
                    <td>4.2</td>
                    <td>Policy/SOP review  (of other Departments)</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4.2.1</td>
                    <td>Reviewing Poicies and Procedures</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4.2.2</td>
                    <td>Recommendation and suggestions</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td rowspan="2">4.2.3</td>
                    <td rowspan="2">Final Endorsement</td>
                    <td>BoD</td>
                    <td>Full Power</td>
                    <td rowspan="2" class="bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="Policies to be approved by BoD"></td>
                  </tr>
                  <tr>
                    <td>EMC / CEO</td>
                    <td>Full Power</td>
                  </tr>
                  <tr class="bg-bnb-orange"><td colspan="5"></td></tr>


                  <tr class="bg-bnb-blue text-white">
                    <td>5</td>
                    <td colspan="4">Risk Assessment</td>
                  </tr>
                  <tr>
                    <td>5.1</td>
                    <td>New Product/Service</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>5.2</td>
                    <td>Relevant Bank risk Management</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>6</td>
                    <td colspan="4">Risk Disclosures</td>
                  </tr>
                  <tr>
                    <td>6.1</td>
                    <td>Risk Disclosures as per IFRS 9</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>6.2</td>
                    <td>Economic Factor Adjustment as per IFRS 9</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                </tbody>
              </table>
            </div>


            <div id="review" class="tab-pane fade">
              <h3>DOA for Review Department</h3>
              <table class="table table-hover">
                <thead>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </thead>
                <tfoot>
                  <th>Sl. #</th>
                  <th>Activities</th>
                  <th>Delegated To</th>
                  <th>Authority</th>
                  <th>Remarks</th>
                </tfoot>
                <tbody>
                  <tr class="bg-bnb-blue text-white">
                    <td>1</td>
                    <td colspan="4">Report</td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td>Preparation</td>
                    <td>Officer(s)</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td>Validation</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>

                  <tr class="bg-bnb-blue text-white">
                    <td>2</td>
                    <td colspan="4">Meetings</td>
                  </tr>
                  <tr>
                    <td>2.1</td>
                    <td>Conduct Exit meeting with Department & Branches</td>
                    <td>HoD</td>
                    <td>Full Power</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2.2</td>
                    <td>Meeting with the different verticals</td>
                    <td>CFO</td>
                    <td>Full Power</td>
                    <td title="Head discusses the recommendation provided by review team with CFO" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      	</section>
    </div>
@endsection