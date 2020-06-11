<?php

namespace App\Http\Controllers\Employer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     * The value of the username or email login field
     * 
     * @var string
     */
    protected $name;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');        
        $this -> name =  $this -> findName();
        
    }

    //This logs in user either with email or user name
    public function findName(){
        $login = request() -> input('name');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL)?'email':'username';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }
    public function getName(){
        return $this -> name;
    }
    public function guard(){
        return Auth::guard('employer');
    }

    public function showLoginForm()
    {
    
        return view('employer.login');
    }

   
 

    


   
}
