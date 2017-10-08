<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
    	'name','description'
    ];
	public function websites() {
	    return $this->belongsToMany('App\Website')->withTimestamps();
	}
}
