<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Location;
use App\Contact;
use Illuminate\Support\Facades\Crypt;

class DirectoryController extends Controller
{
    public function getDirectorySearch(){
        $departments = Department::all();
        $locations = Location::all();
    	$no = rand(10,30)%2;
    	return view('frontend.search',compact('no','departments','locations'));
    }

    public function getResult(){
    	$no = rand(10,30)%2;
    	return view('frontend.result',compact('no'));
    }

    public function getShow(Request $request){
        $record = Employee::find(Crypt::decryptString($request->id));
    	$no = rand(10,30)%2;
        $param_name = Crypt::decryptString($request->ename);
        $param_department = Crypt::decryptString($request->department);
        $param_location =Crypt::decryptString($request->location);
    	return view('frontend.show',compact('no','record','param_location','param_name','param_department'));
    }

    public function searchDirectory(Request $request){
        $records = "";
        $stat = "employee";
        if($request->department=='0' && $request->location == '0' && $request->employeename == null)
        {
            $records = Employee::with('contact')->get();
        }
        elseif($request->department=='0' && $request->location == '0' && $request->employeename != null)
        {
            $records = Employee::with('contact')->where('name','like',"%$request->employeename%")->get();   
        }
        elseif($request->department=='0' && $request->location != '0' && $request->employeename == null)
        {
            $records = Contact::with('employee')->where('location_id',$request->location)->get(); 
            $stat = 'contact';
        }
        elseif($request->department!='0' && $request->location == '0' && $request->employeename == null)
        {
            $records = Employee::with('contact')->where('department_id',$request->department)->get(); 
        }
        elseif($request->department!='0' && $request->location != '0' && $request->employeename == null)
        {
            $firstrecord = Employee::where('department_id',$request->department)->pluck('id');
            $records = Contact::with('employee')->where('location_id',$request->location)->whereIn('employee_id',$firstrecord)->get();
            $stat = 'contact';
        }
        elseif($request->department=='0' && $request->location != null && $request->employeename != null)
        {
            $firstrecord = Contact::where('location_id',$request->location)->pluck('employee_id');
            $records = Employee::with('contact')->where('name','like',"%$request->employeename%")->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department!='0' && $request->location == '0' && $request->employeename != null)
        {
            $records = Employee::with('contact')->where('name','like',"%$request->employeename%")->where('department_id',$request->department)->get();      
        }
        else
        {
            $firstrecord = Contact::where('location_id',$request->location)->pluck('employee_id');
            $records = Employee::with('contact')->where('name','like',"%$request->employeename%")->where('department_id',$request->department)->whereIn('id',$firstrecord)->get();
        }
        
        $no = rand(10,30)%2;
        $param_name = $request->employeename;
        $param_location = $request->location;
        $param_department = $request->department;
        return view('frontend.result',compact('no','stat','records','request_params','param_name','param_department','param_location'));
    }
}
