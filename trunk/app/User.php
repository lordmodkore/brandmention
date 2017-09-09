<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 
        'email', 
        'password',
        'firstname',
        'lastname',
        'company_name',
        'company_address',
        'language',
        'phone',
        'city',
        'postcode',
        'country',
        'vat_number',
        'paypal_username',
        'status',
        'email_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
