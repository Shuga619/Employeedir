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
                    @if($v->code == '100')
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
        	 <h2>Degegation of Authority for Credit Vertical</h2>
          <ul>
            <li>
              The above DOA matrix pertains to only approval level authority for credit-related activities. It is derived from the DOA in the credit policy which is approved and endorsed by the board. The detailed write up of the DOA policy is annexed separately. It forms part of the credit policy and contains definition, description, responsibilities, and committee structures for various level of authorities.                 
            </li>
            <li>
              The DOA related to administrative functions (employee travel, leave, transfers etc.) is not included in the above matrix as it is covered in the Resource vertical DOA.
            </li>
            <li>
              The detail DOA annexed in the credit policy shall be referred for implementation purpose.
            </li>
          </ul>
          <h3>Acronyms</h3>
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
                <td colspan="4">Approval of Credit Policies and Procedures</td>
              </tr>
              <tr>
                <td>1.1</td>
                <td>Fees, Charges, and Commission structure</td>
                <td>ECC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>1.2</td>
                <td>Procedures for credit functions</td>
                <td>ECC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              
              <tr class="bg-bnb-blue text-white">
                <td>2</td>
                <td colspan="4">Approval for Credit Sanctioning</td>
              </tr>
              <tr>
                <td rowspan="6">2.1</td>
                <td rowspan="6">Fund based credit</td>
                <td>CEO</td>
                <td>Up to Nu.100 million and all related party loans</td>
                <td rowspan="6" class="text-center bg-bnb-orange" data-toggle="tooltip" data-placement="left" title="Standard loans shall be approved as per the Delegation Matrix up to CEO. Loans to related parties have to be approved by ECC/CEO irrespective of the amount and by the BCIC if the amount exceeds 1% of capital fund (for employee) and 5% of capital fund (for significant owner and director).">
                </td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu. 40 million</td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>Up to Nu.5 million ( Thimphu)
                    <br>Up to Nu.4 million (Phuntsholing)
                    <br>Up to Nu.2.5 (Other Branches)</td>
              </tr>
              <tr>
                <td>EOI</td>
                <td>Up to Nu. 0.5 million (GE and Standard loans only)</td>
              </tr>
              <tr>
                <td rowspan="5">2.2</td>
                <td rowspan="5">Non-fund based credit inlcuding BAC limit</td>
                <td>CEO</td>
                <td>Above Nu.60 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu.60 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>Up to Nu. 10 million</td>
                <td></td>
              </tr>

              <tr class="bg-bnb-blue text-white">
                <td>3</td>
                <td colspan="4">Approval for Modification of Terms of Credit</td>
              </tr>
              <tr>
                <td>3.1</td>
                <td>Restructuring</td>
                <td>CEO</td>
                <td>Up to Nu.100 million</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-orange text-white">
                <td>3.2</td>
                <td colspan="4">Rescheduling</td>
              </tr>
              <tr>
                <td rowspan="6">3.2.1</td>
                <td rowspan="6">Extension of maturity date</td>
                <td>CEO</td>
                <td>Above Nu.40 million and all related party loans</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy.CEO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>
                  Up to Nu.5 million ( Thimphu)                          
                  <br>Up to Nu.4 million (Phuntsholing)                           
                  <br>Up to Nu.2.5 (other branches)
                </td>
                <td></td>
              </tr>
              <tr>
                <td>EOI</td>
                <td>Up to Nu. 0.5 million (GE and Standard loans only)</td>
                <td></td>
              </tr>
              <tr>
                <td>3.2.2</td>
                <td>Reduction of Maturity Date</td>
                <td>Multi-Level Authority</td>
                <td>EOI/Branch Manager/Credit Head</td>
                <td></td>
              </tr>
              <tr>
                <td>3.2.3</td>
                <td>Change in payment due dates within maturity date</td>
                <td>Multi-Level Authority</td>
                <td>EOI/Branch Manager/Credit Head</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-orange">
                <td colspan="5"></td>
              </tr>
              <tr>
                <td>3.3</td>
                <td>Reduction of sanctioned amount</td>
                <td>Multi-Level Authority</td>
                <td>EOI/Branch Manager/Credit Head</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="6">3.4</td>
                <td rowspan="6">Loan transfer</td>
                <td>CEO</td>
                <td>Up to Nu.100 million and all related party loans</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>
                  Up to Nu.5 million ( Thimphu)
                  <br>Up to Nu.4 million (Phuntsholing)
                  <br>Up to Nu.2.5 (other branches)
                </td>
                <td></td>
              </tr>
              <tr>
                <td>EOI</td>
                <td>Up to Nu. 0.5 million (GE and Standard loans only)</td>
                <td></td>
              </tr>
              <tr>
                <td>3.5</td>
                <td>Reduction of credit limit</td>
                <td>Multi-Level Authority</td>
                <td>EOI/Branch Manager/Credit Head</td>
                <td></td>
              </tr>
              <tr>
                <td>3.6</td>
                <td>Purchase of vehicle less than loan limit</td>
                <td>Multi-Level Authority</td>
                <td>Branch Manager/Credit Head</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="6">3.7</td>
                <td rowspan="6">Release or Release & Replacement of Security</td>
                <td>CEO</td>
                <td>Above Nu.40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>
                  Up to Nu.5 million ( Thimphu)                          
                  <br>Up to Nu.4 million (Phuntsholing)                           
                  <br>Up to Nu.2.5 (other branches)
                </td>
                <td></td>
              </tr>
              <tr>
                <td>EOI</td>
                <td>Up to Nu. 0.5 million (GE and Standard loans only)</td>
                <td></td>
              </tr>
              
              <tr class="bg-bnb-orange text-white">
                <td>3.8</td>
                <td colspan="4">Capitalization of Interest</td>
              </tr>
              <tr>
                <td rowspan="5">3.8.1</td>
                <td rowspan="5">Loan amount within initial sanctioned limit</td>
                <td>CEO</td>
                <td>Above Nu.40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>
                  Up to Nu.5 million ( Thimphu)                          
                  <br>Up to Nu.4 million (Phuntsholing)                           
                  <br>Up to Nu.2.5 (other branches)
                </td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="5">3.8.2</td>
                <td rowspan="5">Loan amount exceeding initial sanctioned limit</td>
                <td>CEO</td>
                <td>Up to Nu.100 million and all related party loans</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>
                  Up to Nu.5 million ( Thimphu)                          
                  <br>Up to Nu.4 million (Phuntsholing)                           
                  <br>Up to Nu.2.5 (other branches)
                </td>
                <td></td>
              </tr>
              <tr class="bg-bnb-orange">
                <td colspan="5"></td>
              </tr>
              <tr>
                <td rowspan="6">3.9</td>
                <td rowspan="6">Renewal of credit facilities</td>
                <td>CEO</td>
                <td>Above Nu.40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>
                  Up to Nu.5 million ( Thimphu)                          
                  <br>Up to Nu.4 million (Phuntsholing)                           
                  <br>Up to Nu.2.5 (other branches)
                </td>
                <td></td>
              </tr>
              <tr>
                <td>EOI</td>
                <td>Up to Nu. 0.5 million (GE and Standard loans only)</td>
                <td></td>
              </tr>
              <tr>
                <td>3.10</td>
                <td>Settlement Account Change</td>
                <td>Multi-Level Authority</td>
                <td>EOI/Branch Manager/Credit Head</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="5">3.11</td>
                <td rowspan="5">Any other modification of terms</td>
                <td>CEO</td>
                <td>Above Nu.40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. CEO</td>
                <td>Up to Nu. 40 million</td>
                <td></td>
              </tr>
              <tr>
                <td>CCO</td>
                <td>Up to Nu.20 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Credit Head</td>
                <td>Up to Nu.10 million</td>
                <td></td>
              </tr>
              <tr>
                <td>Branch Manager</td>
                <td>
                  Up to Nu.5 million ( Thimphu)                          
                  <br>Up to Nu.4 million (Phuntsholing)                           
                  <br>Up to Nu.2.5 (other branches)
                </td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>4</td>
                <td colspan="4">Approval for Loan Suspension</td>
              </tr>
              <tr>
                <td>4.1</td>
                <td>Suspension through court order</td>
                <td>Suspension Committee</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>4.2</td>
                <td>Suspension on other grounds</td>
                <td>Suspension Committee</td>
                <td>Up to Nu.75 million</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>5</td>
                <td colspan="4">Auctioning of seized properties</td>
              </tr>
              <tr>
                <td>5.1</td>
                <td>Auctioning of seized properties</td>
                <td>Auction Committee</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr class="bg-bnb-blue text-white">
                <td>6</td>
                <td colspan="4">Approval for Loan Write Off</td>
              </tr>
              <tr>
                <td>6.1</td>
                <td>Write off through due process of law (court order)</td>
                <td>ECC</td>
                <td>Full Power</td>
                <td></td>
              </tr>
              <tr>
                <td>6.2</td>
                <td>Write off on other grounds</td>
                <td>ECC</td>
                <td>Up to Nu.200,000</td>
                <td></td>
              </tr>
            </tbody> 
          </table>
      	</section>
    </div>
@endsection