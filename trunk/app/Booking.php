<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	public function websites() {
	    return $this->belongsTo('App\Website');
	}
	public function users() {
	    return $this->belongsTo('App\User');
	}
}
