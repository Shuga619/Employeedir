<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Location;
use App\Contact;
use App\Signin;
use Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addContact(Request $request)
    {
    	$status = '0';
    	$name = $request->name;
    	$designation = $request->designation;
    	$title = $request->title;
    	$department = $request->department;
    	$extension = $request->extension;
    	$flexcube = $request->flexcube;
    	$email = $request->email;
    	$mobile = $request->mobile;
    	$location = $request->location;
        $employee_id = $request->empid;
    	$image = request()->file('image')->getClientOriginalName();
    	// Storage::delete('public/employee_pdf/'.$request->olddoc);
        request()->file('image')->storeAs('public/employee_images',$image);
    	$employee = new Employee;
    	$contact = new Contact;
        $signin = new Signin;
    	$employee->name = $request->name;
    	$employee->designation = $designation;
    	$employee->title = $title;
    	$employee->department_id = $department;
        $employee->employee_id =$employee_id;
    	$employee->image = $image;
    	if($employee->save())
    	{
    		$contact->email = $email;
    		$contact->mobile = $mobile;
    		$contact->extension = $extension;
    		$contact->flexcube = $flexcube;
    		$contact->location_id = $location;
    		$contact->employee_id = $employee->id;
    		if($contact->save())
    		{
                $signin->employee_id = $employee->id;
                $signin->save();
    			$status = '1';
    			$msg = 'Employee Information has been added to Contact.';
    		}
    		else
    			$msg = 'Contact Information couldnot be saved.';
    	}
    	else
    		$msg = 'Employee Information couldnot be saved.';

    	return back()->with(['status'=>$status,'msg'=>$msg]);
    }

    public function viewContact(Request $request){
    	$user = Auth::user();
    	$employee = Employee::with('contact')->find($request->id);
    	return view('backend.view',compact('user','employee'));
    }

    public function editContact(Request $request){
    	// return $request->id;
    	$user = Auth::user();
    	$departments = Department::all();
    	$locations = Location::all();
    	$employee = Employee::with('contact')->find($request->id);
    	return view('backend.edit',compact('user','employee','departments','locations'));
    }

    public function updateContact(Request $request){
    	// return $request->all();
    	$status = '1';
    	$name = $request->name;
        $employee_id = $request->empid;
    	$designation = $request->designation;
    	$title = $request->title;
    	if($request->department == '0' || $request->department == $request->odepartment)
    		$department = $request->odepartment;
    	else
    		$department = $request->department;

    	$extension = $request->extension;
    	$flexcube = $request->flexcube;
    	$email = $request->email;
    	$mobile = $request->mobile;
    	if($request->location == '0' || $request->location == $request->olocation)
    		$location = $request->olocation;
    	else
    		$location = $request->location;
    	Employee::where('id',$request->id)->update([
    		'name' => $request->name,
            'employee_id'=> $employee_id,
    		'designation' => $designation,
    		'title' => $title,
    		'department_id' => $department
    	]);
    	Contact::where('employee_id',$request->id)->update([
    		'email' => $email,
    		'mobile' => $mobile,
    		'extension' => $extension,
    		'flexcube' => $flexcube,
    		'location_id' => $location
    	]);
    	$msg = "Contact Information of $request->name has been updated.";
    	return back()->with(['status'=>$status,'msg'=>$msg]);
    }

    public function bulkUpload(Request $request){
    	$status = '0';
    	$file = $request->file('contact');
        $csvData = file_get_contents($file);
        // return $csvData;
        $rows = array_map('str_getcsv',explode("\n", $csvData));
        $header = array_shift($rows);
        $check = ['name','employee_id','designation','job_title','department','extension','mobile','email','flexcube','location','image'];
        if($header == $check)
        {
            foreach($rows as $row){
                if(count($row) == count($header))
                {
                    $row = array_combine($header, $row);
                    $employee = new Employee;
                    $contact = new Contact;
                    $signin = new Signin;
                    $employee->name = $row['name'];
                    $employee->employee_id = $row['employee_id'];
                    $employee->designation = $row['designation'];
                    $employee->title = $row['job_title'];
                    $employee->department_id = $row['department'];
                    $employee->image = $row['image'];
                    if($employee->save())
                    {
                    	$contact->email = $row['email'];
			    		$contact->mobile = $row['mobile'];
			    		$contact->extension = $row['extension'];
			    		$contact->flexcube = $row['flexcube'];
			    		$contact->location_id = $row['location'];
			    		$contact->employee_id = $employee->id;
			    		$contact->save();
                        
                        $signin->employee_id = $employee->id;
                        $signin->save();
			    		
                        $status = '1';
			    		$msg = "Contact Information has been Successfully uploaded from CSV file.";	
                	}
                	else
                		$msg = "Contact Information couldnot be imported from CSV file.";
                }
            }
        }
		else{
    		$msg =  "The Selected CSV file doesnot have the correct header. Please Check your .csv file.";
    		}
    	return back()->with(['status'=>$status,'msg'=>$msg]);
    }
}
