<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
 	protected $fillable = [

        'email', 
        'firstname',
        'lastname',
        'company_name',
     	'language',
       	'phone',
        'country',
        'paypal_username',
    ];
	public function websites() {
	    return $this->belongsToMany('App\Website')->withTimestamps();
	}
}
