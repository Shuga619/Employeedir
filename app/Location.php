<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'code','name','category',
    ];

    public function contacts()
    {
    	return $this->hasMany('App\Contact', 'id','location_id');
    }
}
