<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'group_id'          =>  $data['group_id'],
            'email'             =>  $data['email'],
            'password'          =>  bcrypt($data['password']),
            'firstname'         =>  $data['firstname'],
            'lastname'          =>  $data['lastname'],
            'company_name'      =>  $data['company_name'],
            'company_address'   =>  $data['company_address'],
            'language'          =>  $data['language'],
            'phone'             =>  $data['phone'],
            'city'              =>  $data['city'],
            'postcode'          =>  $data['postcode'],
            'country'           =>  $data['country'],
            'vat_number'        =>  $data['vat_number'],
            'paypal_username'   =>  $data['paypal_username'],
            'status'            =>  $data['status'],
            'email_token' => base64_encode($data['email'])
        ]);
    }
}
