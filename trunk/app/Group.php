<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	protected $fillable = [
        'name','description'
    ];

    /**
     * A role can have many users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {

        return $this->belongsToMany('App\User');
    }

}
