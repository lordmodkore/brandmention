<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
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
    public function showRegistrationForm()
    {
        return view('users.signup');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
       
        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);
        dispatch(new SendVerificationEmail($user));

        return view('users.verification');
    }
    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();
        $temp_password = str_random(8);
        $user->verified = 1;
        $user->password =  bcrypt($temp_password);
        if($user->save()){
            return view('users.confirmation',['user'=>$user,'password'=>$temp_password]);
        }
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
        $password = str_random(8);
        return User::create([
            'group_id'          =>  $data['group_id'],
            'email'             =>  $data['email'],
            'firstname'         =>  $data['firstname'],
            'lastname'          =>  $data['lastname'],
            'password'          =>  bcrypt($password),
            'email_token' => base64_encode($data['email'])
        ]);
    }
}
