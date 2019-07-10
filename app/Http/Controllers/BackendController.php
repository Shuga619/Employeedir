<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Location;
use App\User;
use Auth;
use App\Employee;

class BackendController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$user = Auth::user();
        $admins = User::all();
        $contacts = Employee::count();
        $conts = Employee::orderBy('id','DESC')->limit(5)->get();
    	return view('backend.index',compact('user','admins','contacts','conts'));
    }

    public function directory(){
    	$user = Auth::user();
    	$employees = Employee::with('contact')->get();
    	// return $employees;
    	return view('backend.directory',compact('user','employees'));
    }

    public function addContactForm(){
    	$user = Auth::user();
    	$departments = Department::all();
    	$locations = Location::all();
    	return view('backend.addcontact',compact('user','departments','locations'));
    }

    public function bulkUploadForm(){
    	$user = Auth::user();
    	return view('backend.bulkupload',compact('user'));
    }
}