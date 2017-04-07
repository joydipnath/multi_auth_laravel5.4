<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'employer/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:employer', ['except' => 'logout']);
    }

    /**
     * Show the application's login form for admin ----copied from AuthenticatesUsers location
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('employer.login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('employer');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        foreach ($this->guard()->user()->role as $role) {
            if ($role->name == 'employer') {
                return redirect('employer/home');
            }elseif ($role->name == 'editor') {
                return redirect('employer/editor');
            }
        }
        
    }
    public function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'verified' => 1,
        ];
    }
}
