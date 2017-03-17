<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
	public function __construct()
	{
		# code...
		$this->middleware('auth:admin');
		$this->middleware('admin');
	}

    public function index(){

    	return view('admin.home');//return view('admin.home'); change to get admin folder functionality
    }
    
}
