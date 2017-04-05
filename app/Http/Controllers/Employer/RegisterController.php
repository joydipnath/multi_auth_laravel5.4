<?php

namespace App\Http\Controllers\Admin;

use App\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Mail\WelcomeAdmin;
use Illuminate\Auth\Events\Registered;
use Auth;
use Mail;
use DB;

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
    protected $redirectTo = 'employer/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:employer');
    }
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('employer.register');
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

        DB::beginTransaction();

        try {

        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);

        \Mail::to($user)->send(new WelcomeAdmin($user));

        DB::commit();
        return back();
        // return $this->registered($request, $user)
        //                 ?: redirect($this->redirectPath());

        }
        catch(Exception $e)
        {
            DB::rollback(); 
            return back();
        }
    }
     /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */

    protected function guard()
    {
        return Auth::guard('employer');
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
            'name' => 'required|max:255',
            'workmail' => 'required|email|max:255|unique:users',
            'othermail' => 'required|email|max:255|unique:users',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'mobile' => 'required|max:10',
            'landline' => 'required|max:10',
            'companyname' => 'required|max:255',
            'designation' => 'required|max:255',
            'website' => 'required|max:255',
            'business_sector' => 'required|max:255',
            'logo' => 'required|max:255',

            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new  Admin  user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Employer::create([
            'name' => $data['name'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            
            'mobile' => $data['mobile'],
            'landline' => $data['landline'],
            'companyname' => $data['companyname'],
            'designation' => $data['designation'],
            'website' => $data['website'],
            'workmail' => $data['workmail'],
            'othermail' => $data['othermail'],
            'business_sector' => $data['business_sector'],
            'logo' => $data['logo'],
            
            'password' => bcrypt($data['password']),
            'email_token' => str_random(10),
        ]);
    }

    // Get the user who has the same token and change his/her status to verified i.e. 1
    public function verify($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
        Employer::where('email_token',$token)->firstOrFail()->verified();
        return redirect(route('employer.login'));
    }
}
