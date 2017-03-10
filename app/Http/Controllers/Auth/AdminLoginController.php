<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
	public function __construct()
	{
		# code...
		$this->middleware('guest:admin');
	}

    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request){
    	
    	//validate the form data
    	$this->validate($request,[
    		'email'    => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	//Attemt to login the user in
    	if(Auth::guard('admin')->attempt(['email'=> $request->email,'password' => $request->password], $request->remember)){
    		//if successfull, then take to 
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	//if unsuccessfull, then take it back to login page
    	return redirect()->back()->withInput($request->only('email','remember'));
    }
}