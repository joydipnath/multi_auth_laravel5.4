<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class EditorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('editor',['except'=>'general']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.editor');
    }
    public function general()
    {
        return view('admin.general');
    }
}
