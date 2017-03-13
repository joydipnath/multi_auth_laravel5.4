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
	}

    public function index(){

    	return view('home');//return view('admin.home'); change to get admin folder functionality
    }
}
