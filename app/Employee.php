<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
      'name','designation','title','department_id',  
    ];

    public function department()
    {
    	return $this->belongsTo('App\Department', 'department_id','id');
    }

    public function contact()
    {
    	return $this->hasOne('App\Contact', 'employee_id','id');
    }
}
