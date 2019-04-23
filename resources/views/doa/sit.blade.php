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
                    @if($v->code == '500')
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
    	<h2>Degegation of Authority for Strategy and Information Technology Vertical</h2>
      <h3>Acronyms</h3>
      <div class="mb-4">
        <div class="row">
          <div class="col-sm-6">EMC - Executive Management Committee</div>
          <div class="col-sm-6">CEO - Chief Executive Officer</div>
        </div>
        <div class="row">
          <div class="col-sm-6">PC - Project Committee </div>
          <div class="col-sm-6">CSIO - Chief Strategy and Information Technology Officer</div>
        </div>
        <div class="row">
          <div class="col-sm-6">HoD - Head of Department</div>
        </div>
      </div>

      <ul class="nav nav-pills">
        <li class="active p-4"><a data-toggle="pill" href="#general"><h4 class="text-bnb-blue">General DOA</h4></a></li>
        <li class="p-4"><a data-toggle="pill" href="#osm"><h4 class="text-bnb-blue">Office of Strategy Management</h4></a></li>
        <li class="p-4"><a data-toggle="pill" href="#it"><h4 class="text-bnb-blue">Information Technology Department</h4></a></li>
      
      <div class="tab-content">
        <div id="general" class="tab-pane in active">
          <h3>General DOA for Strategy and Information Technology Vertical</h3>
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
                <td colspan="4">General Administrative Functions</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Approval of office stationaries</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td rowspan="3" title="As per Service Rule" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>Finalization of Department budget (CAPEX & OPEX)</td>
                <td>HoD</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.3</td>
                <td>Approval to utilise department's miscelleneous budget</td>
                <td>HoD</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.4</td>
                <td>Project Handover for implementation by end users</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>1.5</td>
                <td>Approval from Regulatory authorities (RMA) on new initiatives (EO/ATM/Products/Services)</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>

            </tbody>
          </table>
        </div>

        <div id="osm" class="tab-pane fade">

          <h3>DOA for Office of Strategy Management</h3>
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
                <td colspan="4">Strategy Management</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Authority to conduct annual strategy coordination workshop</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td title="As per Service Rule" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td rowspan="2">1.2</td>
                <td rowspan="2">Authroity to conduct quarterly strategy review meeting wth EMC/Board</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td rowspan="2" title="with EMC by HoD. With Board by CSIO" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>HoD</td>
                <td>Full Power</td>
              </tr>
              <tr>
                <td>1.3</td>
                <td>Setting corporate scorecards & present to EMC</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Research & Development</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>Signing off for initiation of  idea generation program (BankIt Day)</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.2</td>
                <td>Idea selection for further research and development</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.3</td>
                <td>Data access approval</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Expansion Projects</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>ATM and EO Site Approval</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.2</td>
                <td>Approval to disburse expenses related to ATM/EO</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.3</td>
                <td>ATM/EO Site Rental Approval within Nu. 10,000/-</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.4</td>
                <td>ATM Site Rental Approval above Nu. 10,000/- to 15,000/-</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.5</td>
                <td>Project scope deviation within Nu. 20K</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.6</td>
                <td>Project scope deviation between Nu. 20K to 50K</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.7</td>
                <td>Project scope deviation between Nu. 50K to 100K</td>
                <td>PC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.8</td>
                <td>Project scope deviation between Nu. 100K to 150K</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Expansion Projects</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Approval of Projects for implementation</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.2</td>
                <td>Finalization of SRS Document and sign-off</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.3</td>
                <td>Negotiation on project cost with vendor</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.4</td>
                <td>Approval of project team</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.5</td>
                <td>Finalization of SLA Document and sign-off</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.6</td>
                <td>Approval to disburse expenses related to projects</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td title="within budget & verified by PM" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>4.7</td>
                <td>Scope deviation but within budget</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.8</td>
                <td>Project scope deviation within 10% of Budget</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td></td>
              </tr>

            </tbody>
          </table>
        </div>

        <div id="it" class="tab-pane fade">

          <h3>DOA for Information Technology Department</h3>
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
                <td colspan="4">Network and Facility</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Purchases within Nu. 500,000/- p.a. subject to Nu. 50,000/- per instances</td>
                <td>Incharge</td>
                <td>Full Power</td>
                <td title="As per Service Rule" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>Purchases within Nu. 1,000,000/- p.a. subject to Nu. 75,000/- per instances</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>1.3</td>
                <td>Purchases within Nu. 1,500,000/- p.a. subject to Nu. 150,000/- per instances</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>1.4</td>
                <td>Network design & configuration at Branch & EO</td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td title="Validated by HoD" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>1.5</td>
                <td>Configuration of firewall </td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td title="Incharge and endorsed by ISO and HOD" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>1.6</td>
                <td>Finalization of IT equipment specifications</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Core Banking System</td>
              </tr>
              <tr>
                <td>2.1</td>
                <td>User ID creation/modification</td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.2</td>
                <td>Product creation & modification</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.3</td>
                <td>GL creation</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.4</td>
                <td>UAT set-up and maintenance</td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td title="CBS & DBA Team" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>2.5</td>
                <td>Providing data to internal users (to other vertical)</td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td title="CBS & DBA Team" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>2.6</td>
                <td>SOP</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>2.7</td>
                <td>Providing users with CBS usage guidance</td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td title="CBS & DBA Team" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Database Administration</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Approval for readiness of Database server</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.2</td>
                <td>Procure necessary Hard disks and Backup Tapes for Database servers </td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>3.3</td>
                <td>Implementation of Database password and security</td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td title="Incharge" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>3.4</td>
                <td>Design and generate all CBS reports</td>
                <td>Respective Incharge/officials</td>
                <td>Full Power</td>
                <td title="CBS & DBA Team" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Value Added Services</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Approval for Value Added Services (VAS)</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td title="Endorsement  from respective Vertical" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>4.2</td>
                <td>Develop VAS system capacity and integration plan for new sites and new VAS systems</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td title="with validation from CSIO" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>5</td>
                <td colspan="4">Information Security:</td>
              </tr>
              <tr>
                <td>5.1</td>
                <td>Edit and realign all IT security policies, processes, and procedures with International standard</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td title="Edit/Review/Proof Reading by ISO. Appraisal to EMC by HoD. Appraisal to Board: CSIO" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>5.2</td>
                <td>To address information security issues, concerns, threats and vulnerabilities; Scanning entire system using hacking tools to see existing vulnerabilities</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>5.3</td>
                <td>Approval for scheduled (automated) scanning and penetration testing are performed</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td title="With information to CSIO" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
              <tr>
                <td>5.4</td>
                <td>Signing off security awareness  program/presentation to address Information Security threats and highlight vulnerabilities to trigger security incident.</td>
                <td>HoD</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>5.5</td>
                <td>Approval for ISM implementation</td>
                <td>CSIO</td>
                <td>Full Power</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>6</td>
                <td colspan="4">Information Security:</td>
              </tr>
              <tr>
                <td>6.1</td>
                <td>Anything not covered under serial no 1 to 6</td>
                <td>EMC</td>
                <td>Full Power</td>
                <td title="Authority to approve will be followed as per IT Policy" data-toggle="tooltip" data-placement="left" class="bg-bnb-orange"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
@endsection