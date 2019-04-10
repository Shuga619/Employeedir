<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'code','name',
    ];

    public function employees()
    {
    	return $this->hasMany('App\Employee', 'id','department_id');
    }
}
