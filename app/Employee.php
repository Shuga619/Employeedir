<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
      'name','designation','title','employee_id','department_id',  
    ];

    public function department()
    {
    	return $this->belongsTo('App\Department', 'department_id','id');
    }

    public function contact()
    {
    	return $this->hasOne('App\Contact');
    }

    public function signin()
    {
        return $this->hasOne('App\Signin', 'employee_id','id');
    }
}
