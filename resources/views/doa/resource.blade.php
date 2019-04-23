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
                    @if($v->code == '400')
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
    	<h2>Degegation of Authority for Resource Vertical</h2>
      <h3>Acronyms</h3>
      <div class="mb-4">
        <div class="row">
          <div class="col-sm-6">CEO - Chief Executive Officer</div>
          <div class="col-sm-6">EMC - Executive Management Committee</div>
        </div>
        <div class="row">
          <div class="col-sm-6">CRO - Chief Resource Officer</div>
          <div class="col-sm-6">HoD - Head of Department</div>
        </div>
        <div class="row">
          <div class="col-sm-6">HOTC - Head Office Tender Committee</div>
          <div class="col-sm-6">BTC - Branch Tender Committee</div>
        </div>
        <div class="row">
          <div class="col-sm-6">ETC - Executive Tender Committee</div>
        </div>
      </div>

      <ul class="nav nav-pills">
        <li class="active p-4"><a data-toggle="pill" href="#hr"><h4 class="text-bnb-blue">Human Resource</h4></a></li>
        <li class="p-4"><a data-toggle="pill" href="#administration"><h4 class="text-bnb-blue">Administration</h4></a></li>
        <li class="p-4"><a data-toggle="pill" href="#facility"><h4 class="text-bnb-blue">Facility</h4></a></li>
        <li class="p-4"><a data-toggle="pill" href="#engineering"><h4 class="text-bnb-blue">Engineering Department</h4></a></li>
        <li class="p-4"><a data-toggle="pill" href="#procurement"><h4 class="text-bnb-blue">Procurement</h4></a></li>
      </ul>
      
      <div class="tab-content">
        <div id="hr" class="tab-pane in active">
          <h3>DOA for Human Resource</h3>
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
                <td colspan="4">Recruitment Related</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Approval of Recruitment Criteria up to Band D</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td rowspan="7" title="As per the provisions of the HR Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>Approval of Selection of Interview Panelist</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.3</td>
                <td>Endorsement of Recruitment Results</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.4</td>
                <td>Issue of Job Offer Letter to New Recruits</td>
                <td>Head HRA</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.5</td>
                <td>Appointment Order for New Recruits</td>
                <td>CRO</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.6</td>
                <td>Signing of Service Contract with new recruits</td>
                <td>CRO</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.7</td>
                <td>Approval of staff placement</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.8</td>
                <td>Approval of service confirmation</td>
                <td>Head HRA</td>
                <td>Full Power</td>
                <td title="Subject to recommendation by respective  BM/HOD and Chief" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Pay & Compensation</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>Approval of Salary advance</td>
                <td>Head HRA</td>
                <td>Full Power</td>
                <td rowspan="4" title="As per the provisions of the HR Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>2.2</td>
                <td>Approval of study advance</td>
                <td>CRO</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>2.3</td>
                <td>Approval for changes in  form (Band)</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>2.4</td>
                <td>Approval of officiating allowance</td>
                <td>Head HRA</td>
                <td>Full Power</td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Training</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Nomination for In Country training</td>
                <td></td>
                <td></td>
                <td rowspan="4" title="HODs/BMs in consultation with Respective Chiefs" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>3.2</td>
                <td>Nomination for Ex Country Training</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3.3</td>
                <td>Nomination for in -House training</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3.4</td>
                <td>Identification for Projects</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3.5</td>
                <td>Approval of  Ex-country training</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td rowspan="7" title="HODs/BMs in consultation with Respective Chiefs" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>3.6</td>
                <td>Approval of  Ex-country workshop/seminar</td>
                <td>CEO</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>3.7</td>
                <td>Approval of  In-country training/seminar/workshop</td>
                <td>CRO</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>3.8</td>
                <td>Approval for release of Course Fees for approved courses</td>
                <td>Head HRA</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>3.9</td>
                <td>Approval for release of Visa fees</td>
                <td>HRO</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>3.10</td>
                <td>Approval of comparative Analysis (international air Tickets)</td>
                <td>CRO</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>3.11</td>
                <td>Approval for release of DSA</td>
                <td>Head HRA</td>
                <td>Full Power</td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Promotion of Employees</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Approval of Promotion up to Band D</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.2</td>
                <td>Approval of Change in Pay Scale due to Promotion</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>5</td>
                <td colspan="4">Transfer of Employees</td>
              </tr>
              <tr>
                <td>5.1</td>
                <td>Transfer of Employees between verticals, Departments and Branches (at Head Office)</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>5.2</td>
                <td>Intra Departmental and/or intra Branch transfers within a vertical</td>
                <td>Multi-Level Authority</td>
                <td>Full Power</td>
                <td title="Respective vertical Chief in consultation with HoD &BM" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>5.3</td>
                <td>Transfer of employees between various functions/verticals (at Branch Office)</td>
                <td>Branch Manager</td>
                <td>Full Power</td>
                <td title="In cosultation with the Chief of Operations" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>6</td>
                <td colspan="4">Interns & Internships</td>
              </tr>
              <tr>
                <td>6.1</td>
                <td>Approval of Interns at Branch Office</td>
                <td>Branch Manager</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>6.2</td>
                <td>Approval of Interns at Head  Office</td>
                <td>Head HRA</td>
                <td>Full Power</td>
                <td title="Respective vertical Chief in consultation with HoD &BM" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>7</td>
                <td colspan="4">Employee Satisfaction</td>
              </tr>
              <tr>
                <td>7.1</td>
                <td>Approval for implementation of activities recommended by Engagement Surveys</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>8</td>
                <td colspan="4">Employee Seperation</td>
              </tr>
              <tr>
                <td>8.1</td>
                <td>Approval of Resignation up to Band D</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td title="Based on recommendation by respective BM/HOD and Chief" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>8.2</td>
                <td>Issue of Relieve Order for approved Seperation</td>
                <td>Head HRA</td>
                <td>Full Power</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="administration" class="tab-pane fade">
          <h3>DOA for Administration</h3>
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
                <td colspan="4">Medical Benefits and entilement</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Approval of Medical advance</td>
                <td>CRO</td>
                <td>Full Power</td>
                <td rowspan="2" title="As per HR Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>Approval of empanelled hospitals</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Travel</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>Approval of travel and tour within Bhutan</td>
                <td>Branch Manager/HoD/Chief</td>
                <td>Full Power</td>
                <td rowspan="2" title="As per HR Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>2.2</td>
                <td>Approval of travel and tour outside Bhutan</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>2.3</td>
                <td>Approval of travel advance for approved travel </td>
                <td>Branch Manager/HoD/Chief</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.4</td>
                <td>Approvel of travel by alternative modes of transportation</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Payment of Utilities</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Approval for payment of utility bill</td>
                <td>Admin Officer</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Insurance(New as well as Renewal)</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Approval of vehicle Insurance (Head Office)</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.2</td>
                <td>Approval of group personal accident Insurance</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.3</td>
                <td>Approval of Directors and Officers Liability Insurance</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.4</td>
                <td>Approval  of Bankers Blanket Crime and Electronic & Computer Crime Policy Insurance</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
               <tr class="bg-bnb-blue text-white">
                <td>5</td>
                <td colspan="4">Operating Expenses</td>
              </tr>
              <tr>
                <td>5.1</td>
                <td>Approval for repairs and maintenance of vechicle(Head Office)</td>
                <td>Head HRA</td>
                <td>Full Power</td>
                <td rowspan="2" title="Subject to approved budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>5.2</td>
                <td>Approval for entertainment/official expenditure </td>
                <td>CRO</td>
                <td>Full Power</td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>6</td>
                <td colspan="4">Approval of staff welfare activities</td>
              </tr>
              <tr>
                <td>6.1</td>
                <td>Approval for participation in Cultural Activities</td>
                <td>CRO</td>
                <td>Full Power</td>
                <td title="Subject to approved budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>7</td>
                <td colspan="4">Write-off</td>
              </tr>
              <tr>
                <td>7.1</td>
                <td>Write-off due to natural calimities</td>
                <td>CEO/EMC</td>
                <td>Up to 100,000</td>
                <td></td>
              </tr>
              <tr>
                <td>7.2</td>
                <td>Write-off due to theft</td>
                <td>CEO/EMC</td>
                <td>Up to 100,000</td>
                <td></td>
              </tr>
              <tr>
                <td>7.3</td>
                <td>Write-off of irrecoverable advances</td>
                <td>CEO/EMC</td>
                <td>Up to 100,000</td>
                <td></td>
              </tr>
               <tr class="bg-bnb-blue text-white">
                <td>8</td>
                <td colspan="4">Disposal of Assets</td>
              </tr>
              <tr>
                <td>8.1</td>
                <td>Approval for disposal/donation of inventories/ Assets</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>9</td>
                <td colspan="4">Leave Management</td>
              </tr>
              <tr>
                <td>9.1</td>
                <td>Approval of Paternity Leave</td>
                <td rowspan="6">Respective Chief/HOD/BM</td>
                <td rowspan="6">Up to 100,000</td>
                <td rowspan="6" title="As per the provisions of the HR Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>9.2</td>
                <td>Approval of Maternity Leave</td>
              </tr>
              <tr>
                <td>9.3</td>
                <td>Approval of Bereavement Leave</td>
              </tr>
              <tr>
                <td>9.4</td>
                <td>Approval of Medical Leave</td>
              </tr>
              <tr>
                <td>9.5</td>
                <td>Approval of Casual Leave</td>
              </tr>
              <tr>
                <td>9.6</td>
                <td>Approval of Earned Leave</td>
              </tr>
              <tr>
                <td>9.7</td>
                <td>Approval of EOL and Study Leave</td>
                <td>CEO/EMC</td>
                <td>Up to 100,000</td>
                <td title="Based on recommendation of HoD/BM/Chief as per the HR Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>9.8</td>
                <td>Approval of Leave encashment</td>
                <td>Head HRA/Branch Manager</td>
                <td>Up to 100,000</td>
                <td></td>
              </tr>
              <tr>
                <td>9.9</td>
                <td>Approval of leave out of scope of leave policy</td>
                <td>CEO/EMC</td>
                <td>Up to 100,000</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>10</td>
                <td colspan="4">Arrangement of Security Personnel for the Bank</td>
              </tr>
              <tr>
                <td>10.1</td>
                <td>Approval of security firm for the Bank</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>10.2</td>
                <td>Approval for procurement  of Arms & Ammunition</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>10.3</td>
                <td>Approval for allottment  of arms & Ammunitions within the bank</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>10.4</td>
                <td>Execution of contract agreement with Security firm</td>
                <td>CRO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>10.5</td>
                <td>Termination/renewal of contract agreement with Security firm</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>10.6</td>
                <td>Approval for changes to the contact agreement</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="facility" class="tab-pane fade">
          <h3>DOA for Facility</h3>
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
                <td colspan="4">AMC (New HO Building)</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Approval of AMCs</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td title="Annual Maintenance Contract" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4"> Assets (Electrical)</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>Approval for disposal/donation of inventories/ Assets</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.2</td>
                <td>Approval of additional security items/features</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              
              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Physical Security</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Approval of changes to the physical security policy</td>
                <td>CEO/EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Physical Security</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Approval of specification of electrical items</td>
                <td>CRO</td>
                <td>Full Power</td>
                <td title="Subject to approved budget" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="engineering" class="tab-pane fade">
          <h3>DOA for Engineering Department</h3>
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
                <td colspan="4">Valuation of Properties</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Review and Revision of Valuation Guide</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>Approval of Valuation Rates</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-orange text-white">
                <td>1.3</td>
                <td colspan="4">Valuation of Properties</td>
              </tr>
              <tr>
                <td>1.3.1</td>
                <td>Engineers with 3 to 5 years experince at the bank</td>
                <td>Multi-Level Authority</td>
                <td>Nu. 20 Million</td>
                <td title="Beyond these limits shall be verified by Sr. Engineer or Head of the department" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange" rowspan="3"></td>
              </tr>
              <tr>
                <td>1.3.2</td>
                <td>Engineers with 5 to 10 years experience with the bank</td>
                <td>Multi-Level Authority</td>
                <td>Nu. 30 Million</td>
              </tr>
              <tr>
                <td>1.3.3</td>
                <td>Engineers with more than 10 years experience</td>
                <td>Multi-Level Authority</td>
                <td>Nu. 50 Million</td>
              </tr>
              <tr class="bg-bnb-orange"><td colspan="5"></td></tr>
              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Tour & Leave</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>Approval for Head Engineer</td>
                <td>CRO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.2</td>
                <td>Approval for Engineers under the Engineering Department</td>
                <td>Head Engineering</td>
                <td>Full Power</td>
                <td title="Sr. Engineer is also delagated under the Job roles to approve tour for the engineers under property valuation" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>2.3</td>
                <td>Approval of tour for the  staff under the Engineering Department</td>
                <td>Head Engineering</td>
                <td>Full Power</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Real Estate Properties</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Approval  of yearly land & property tax</td>
                <td>Head Engineering</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.2</td>
                <td>Approval of yearly valuation of bank assests</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.3</td>
                <td>Administrative approval for Renovation/Modification of Branch/Extension Offices</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.4</td>
                <td>Technical sanction for renovation/modifcation of branch/Extension offices (Drawings & cost estimates)</td>
                <td>Head Engineering</td>
                <td>Full Power</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Project (New Construction & R &M) Works</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Administrative approval for Project works</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.2</td>
                <td>Assignment of Poject works to the Engineering Department</td>
                <td>CRO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.3</td>
                <td>Coordination and management in the preparation of RFP/SBD, etc.</td>
                <td>Head Engineering</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.4</td>
                <td>Technical sanction for for the implementation of projects (Drawings & cost estimates)</td>
                <td>Head Engineering</td>
                <td>Full Power</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="procurement" class="tab-pane fade">
          <h3>DOA for Procurement</h3>
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
                <td colspan="4">Procurement of Goods/Works/Services</td>
              </tr>
              <tr>
                <td rowspan="3">1.1</td>
                <td rowspan="3">Approval of procurement, including NIT, Opening of Tender, Evalaution and Award (Goods & Works)</td>
                <td>ETC</td>
                <td>Above Nu. 20 million & up to 50 Million</td>
                <td rowspan="6" title="Subject to approved budget and procedure defined in the Procurement Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>HOTC</td>
                <td>Up to Nu. 20 million</td>
              </tr>
              <tr>
                <td>BTC</td>
                <td>Up to Nu. 0.5 million</td>
              </tr>

              <tr>
                <td rowspan="3">1.2</td>
                <td rowspan="3">Approval of procurement, including RFP, Opening of Tender, Evalaution and Award (Services)</td>
                <td>ETC</td>
                <td>Above Nu. 0.5 million & upto Nu. 5 Million</td>
              </tr>
              <tr>
                <td>HOTC</td>
                <td>Up to Nu. 0.5 million</td>
              </tr>
              <tr>
                <td>BTC</td>
                <td>Up to 0.1 Million</td>
              </tr>
              <tr>
                <td rowspan="3">1.3</td>
                <td rowspan="3">Appointment of Evaluation Committee</td>
                <td>ETC</td>
                <td>Full Power</td>
                <td rowspan="3" title="Subject to approved budget and procedure defined in the Procurement Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>HOTC</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>BTC</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.4</td>
                <td>Procurement During Emergency and Exigency</td>
                <td>ETC</td>
                <td>Full Power</td>
                <td title="Subject to approved budget and approved threshold" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>1.5</td>
                <td>Signing and approval of bills submitted by vendors/suppliers</td>
                <td>Head HRA</td>
                <td>Full Power</td>
                <td title="As long as the procurement of the billed item is done following prescribed process" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Use of Procurement Method</td>
              </tr>
              <tr>
                <td rowspan="3">2.1</td>
                <td rowspan="3">Open Tender</td>
                <td>ETC</td>
                <td>Above Nu. 1 million</td>
                <td rowspan="12" title="Subject to approved budget and as per the procedure defined in the Procurement Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>HOTC</td>
                <td>Above Nu. 0.5 million</td>
              </tr>
              <tr>
                <td>BTC</td>
                <td>Above Nu.0.1million</td>
              </tr>
              <tr>
                <td rowspan="3">2.2</td>
                <td rowspan="3">Limited Tender</td>
                <td>ETC</td>
                <td>Up to Nu. 1 million</td>
              </tr>
              <tr>
                <td>HOTC</td>
                <td>Up to Nu. 0.5 million</td>
              </tr>
              <tr>
                <td>BTC</td>
                <td>Up to Nu.0.1 million</td>
              </tr>
              <tr>
                <td rowspan="3">2.3</td>
                <td rowspan="3">Direct Contracting</td>
                <td>ETC</td>
                <td>Up to Nu.200,000</td>
              </tr>
              <tr>
                <td>HOTC</td>
                <td>Up to Nu. 50,000</td>
              </tr>
              <tr>
                <td>BTC</td>
                <td>Up to Nu.15,000</td>
              </tr>
              <tr>
                <td rowspan="3">2.4</td>
                <td rowspan="3">Spot Quotation</td>
                <td>ETC</td>
                <td>Up to Nu.500,000</td>
              </tr>
              <tr>
                <td>HOTC</td>
                <td>Up to Nu. 200,000</td>
              </tr>
              <tr>
                <td>BTC</td>
                <td>Up to Nu.50,000</td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Annual Maintenance Contract (Office equipments)</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Approval of AMCs</td>
                <td>ETC</td>
                <td>Full Power</td>
                <td title="Subject to approved budget and use of appropriate procurement method" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">LTA/MOU with Vendors</td>
              </tr>
              <tr>
                <td rowspan="3">4.1</td>
                <td rowspan="3">Approval of LTA/MOU</td>
                <td>ETC</td>
                <td>Full Power</td>
                <td title="Subject to approved budget and use of appropriate procurement method" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
@endsection