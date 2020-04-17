<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class SignatureController extends Controller
{
    public function getSearch(){
    	$no = rand(10,30)%2;
    	return view('signature.search',compact('no'));
    }

    public function searchDirectory(Request $request){
    	$flag = false;
    	$no = rand(10,30)%2;
    	$loc = $office = '';
    	$request->validate([
    		'employee_id' => 'required|digits:10',
    	]);

    	$emp = Employee::where('employee_id',$request->employee_id)->first();
    	if(!blank($emp))
    	{
    		$flag = true;
    		if($emp->contact->location->category == 'headoffice'){
	    		$loc = 'Thimphu';
	    	}
	    	elseif ($emp->contact->location->category == 'branch') {
	    		$location = explode(" ",$emp->contact->location->name);
	    		$loc = $location[0];
	    	}
	    	else
	    	{
	    		$loc = 'Your Location Here';
	    	}
	    	$office = $emp->contact->location->name;
    	}
    	return view('signature.result',compact('flag','emp','no','loc','office'));
    
    }
}
