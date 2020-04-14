<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use  Socialite;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\SocialProvider;
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
    protected $redirectTo = '/user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        $this->middleware('guest');
    }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_num'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'talent' => ['required'],
            'first_name' => ['string'],
            'last_name' => ['string'],
            'location' => ['required'],        
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required','string','max:15']
        ]);
    }
 
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        
        
            $user =  User::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone' => $data['phone'],
                'location' => $data['location'],
                'talent' => $data['talent']
            ]);
        try{
            Mail::to($data['email'])->send(new WelcomeMail($data['username']));
        }
        catch(Exception $e){
            auth()->login($user);
        }

        
        
        return $user;

    }

    //Redirect to the facebook authentication page
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();

    } 
    public function finalizeSocial(){
        return view('finalsocial');
    }
    public function handleProviderCallback($provider){
        $newSocial = true;
        
        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            return redirect('/');
        }
        //Check if we have logged provider
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();
        if(!$socialProvider){
            //create a new user and provider
           // dd($socialProvider);
            
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['username' => $socialUser->getName()]
                
                
            );
            $user -> socialProviders()->create(
                ['provider_id'=> $socialUser -> getId(), 'provider'=> $provider]
            );

        }
        else{
            $user = $socialProvider->user;
        }
        auth()->login($user);
        return redirect('/home')->with($newSocial);
      //  return $user;
       // return $user ->  getEmail();
    }
  
}
