<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signin extends Model
{
    protected $fillable = [
        'employee_id','OTP','try_count','OTP_time',
    ];

    public function employee(){
    	return $this->belongsTo('App\Employee','employee_id', 'id');
    }
}
