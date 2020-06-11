<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Auth;
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
    protected $redirectTo = '/user/home';


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

        protected function validator(Request $request)
    {
        $request->validate([
            $this->username() => 'string',
            'password' => 'required|string',
            'username'=>'string'
        ]);
    }
    /**
     * @param Request $request
     * @param $guard
     * @return bool
     */
    protected function guardLogin(Request $request, $guard)
    {
        $this->validator($request);
        
        return Auth::guard($guard)->attempt(
            $this->credentials($request),

            $request->get('remember')
        );
    }

        /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function employerLogin(Request $request)
    {
        if ($this->guardLogin($request, Config::get('constants.guards.admin'))) {
            return redirect()->intended('/employer/login');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    


   
}
