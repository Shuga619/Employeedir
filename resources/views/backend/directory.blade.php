@extends('layouts.backend')

@section('content')
	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
    	<div class="card-header py-3">
      		<h6 class="m-0 font-weight-bold text-primary">Employee Directory</h6>
    	</div>
    	<div class="card-body">
      		<div class="table-responsive">
        		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          			<thead>
            			<tr>
            				<th>SL. #</th>
            				<th>Name</th>
            				<th>Department</th>
            				<th>Designation</th>
                    <th>Extension</th>
            				<th>Action</th>
            			</tr>
          			</thead>
          			<tfoot>
			        	<tr>
			        		<th>SL. #</th>
			             	<th>Name</th>
			             	<th>Department</th>
			             	<th>Designation</th>
                    <th>Extension</th>
			             	<th>Action</th>
			        	</tr>
			        </tfoot>
          			<tbody>
                  @php
                    $i= 1
                  @endphp
        					@foreach($employees as $employee)
                    <tr>
                      <td>{{ $i }}</td>
                      @php
                        $i++
                      @endphp
                      <td>
                        <a href="{{ route('view_contact_path', $employee->id) }}" class="text-primary">
                          <b>{{ $employee->name }}</b>
                        </a>  
                      </td>
                      <td>{{ $employee->department->name }}</td>
                      <td>{{ $employee->designation }}</td>
                      <td>{{ $employee->contact->extension }}</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="{{ route('edit_contact_path', $employee->id) }}" class="btn btn-primary btn-sm">
                            <i class="far fa-edit"></i>
                            Edit
                          </a>
                          <a href="" class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                            Delete
                          </a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
          			</tbody>
        		</table>
      		</div>
    	</div>
  	</div>
@endsection