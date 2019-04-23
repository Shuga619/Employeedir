<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Location;
use App\Mail\SendOTP;
use App\Signin;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
    public function getEmployee(){
    	$no = rand(10,30)%2;
    	return view('frontend.edit.employeeid',compact('no'));
    }

    public function getOtp(){
    	$no = rand(10,30)%2;
    	return view('frontend.edit.enterotp',compact('no'));
    }

    public function getEditForm(){
    	$no = rand(10,30)%2;
    	$record = Employee::first();
    	$location = Location::all();
    	$department = Department::all();
    	return view('frontend.edit.edit',compact('no','record','department','location'));
    }

    public function sendOTP(Request $request){
    	$id = Employee::where('employee_id',$request->employeeid)->pluck('id');
    	if(count($id)<1)
    	{
    		$msg = "Check you employee ID. Employee ID is invalid";
    		return back()->with(['status'=>'0','msg'=>$msg]);
    	}
    	else{
    		$otp = rand(111111,999999);
    		// Signin::where('employee_id',$id)->update([
    		// 	'OTP' => $otp,
    		// 	'try_count' => 0,
    		// 	'OTP_time' => time()
    		// ]);
    	$d = new DateTime();
    	return $d->format('Y-m-d H:i:s');
    	}
    }

    public function sendMail(){
    	Mail::to('taphin@bnb.bt')->send(new SendOTP());
    }
}
