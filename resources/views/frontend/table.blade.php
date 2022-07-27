<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          			<thead>
            			<tr>
            				<th>SL. #</th>
            				<th>Name</th>
                    <th>Employee ID</th>
            				<th>Department</th>
            				<th>Job Title</th>
                    <th>Branch</th>
            				<th>Present Address</th>
							<th>Vehicle number</th>
					<th>Contact Number</th>
							<th>Email ID</th>
            			</tr>
          			</thead>
          			<tbody>
        					@foreach($employees as $employee)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                          <b>{{ $employee->name }}</b>
                        </a>  
                      </td>
                      <td>{{ $employee->employee_id }}</td>
                      <td>{{ $employee->department->name }}</td>
                      <td>{{ $employee->title }}</td>
                      <td>{{ $employee->contact->location->name }}</td>
                      <td>{{ $employee->contact->present_address }}</td>
					  <td>{{ $employee->contact->vehicle_number }}</td>
					  <td>{{ $employee->contact->mobile }}</td>
					  <td>{{ $employee->contact->email }}</td>
                    </tr>
                  @endforeach
          			</tbody>
        		</table>