<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
	protected $table = 'contactrequests';
 	protected $fillable = [
 		'name','designation','title','department_id','employee_id','image','email','mobile','extension','flexcube','location_id',
 	];

 	public function location()
    {
    	return $this->belongsTo('App\Location', 'location_id','id');
    }

    public function department()
    {
    	return $this->belongsTo('App\Department', 'department_id','id');
    }
}
