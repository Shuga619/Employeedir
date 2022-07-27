<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Location;
use App\Contact;
use Illuminate\Support\Facades\Crypt;
use App\Exports\UsersExport;
use App\Exports\EmployeeExportView;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    // public function getDirectorySearch(){
    //     $departments = Department::orderBy('name')->get();
    //     $locations = Location::orderBy('name')->get();
    // 	$no = rand(10,30)%2;
    // 	return view('frontend.report',compact('no','departments','locations'));
    // }

    public function getResult(){
    	$no = rand(10,30)%2;
    	return view('frontend.report_result',compact('no'));
    }
    public function getDirectorySearch(){
        $no = rand(10,30)%2;
    	$employees = Employee::with('contact')->get();
        $departments = Department::orderBy('name')->get();
        $locations = Location::orderBy('name')->get();
    	// return $employees;
    	return view('frontend.report',compact('no','departments','locations','employees'));
    }
    public function export() 
    {
        return Excel::download(new EmployeeExportView, 'employees.xlsx');
    }

}