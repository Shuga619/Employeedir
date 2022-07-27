<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'vehicle_number','employee_name','employee_id', 
    ];
    public function employee()
    {
    	return $this->belongsTo('App\Employee', 'employee_id','name');
    } 
    
}
