<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Group;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){

        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        return view('users.dashboard');
    }

    public function index()
    {
        $users = User::orderBy('id','ASC')->where('group_id','=',2)->paginate(10);
        return view('users.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $remember_token = str_random(10);
        $groups = Group::all();

        return view('users.create',compact('remember_token','groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['email_token' => base64_encode($request->email)]);
        User::create($request->all());
        return redirect()->route('users.dashboard')->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }
    public function edit_profile(){
        $id = auth()->user()->id;
        $user = User::where('id',$id)->first();
        return view('users.edit')->with('user',$user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::find($id);
        return view('users.edit',compact('users','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= User::find($id);
        // $this->validate(request(), [
        //   'name' => 'required',
        //   'price' => 'required|numeric'
        // ]);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->password = Hash::make($request->password);
        $user->company_name =$request->company_name;
        $user->company_address =$request->company_address;
        $user->company_name =$request->company_name;
        $user->phone =$request->phone;
        $user->street_address =$request->street_address;
        $user->city =$request->city;
        $user->country =$request->country;
        $user->postcode =$request->postcode;
        $user->save();
        return redirect('users/'.$user->id.'/edit')->with('success','User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')->with('success','User deleted successfully');
    }
}
