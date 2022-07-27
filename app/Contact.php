<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
       'email','mobile','extension','flexcube','location_id', 'employee_id','vehicle_number','present_address' 
    ];

    public function employee()
    {
    	return $this->belongsTo('App\Employee', 'employee_id');
    } 

    public function location()
    {
    	return $this->belongsTo('App\Location', 'location_id','id');
    }
    public function vehicle()
    {
    	return $this->belongsTo('App\Vehicle','vehicle_number','id');
    }
}
