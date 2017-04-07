<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    //
	public function __construct()
	{
		# code...
		//$this->middleware('auth');
		$this->middleware('auth:employer');
		$this->middleware('employer');
	}

    public function index(){

    	return view('employer.home');//return view('admin.home'); change to get admin folder functionality
    }
    
}
