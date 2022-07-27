<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
	protected $table = 'contactrequests';
 	protected $fillable = [
 		'name','designation','title','department_id','employee_id','image','email','mobile','extension','flexcube','location_id','vehicle_number','present_address'
 	];

 	public function location()
    {
    	return $this->belongsTo('App\Location', 'location_id','id');
    }

    public function department()
    {
    	return $this->belongsTo('App\Department', 'department_id','id');
    }
	public function vehicle()
    {
    	return $this->belongsTo('App\Vehicle', 'vehicle_number','id');
    }
}
