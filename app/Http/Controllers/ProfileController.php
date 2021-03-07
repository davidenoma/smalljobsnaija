<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MailController;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ConnectTalent;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth'); 
      // $this->middleware('auth:employer');
       
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $sourcePath= $request->path();
        $welcomeName = Auth::user();
        
       return view('/user/profile',compact('welcomeName'));
    }
    public function publicProfile(){
        $welcomeName = Auth::user();
        return view('/user/publicprofile',compact('welcomeName'));
    }
  //Function to correct the image upload orientation from mobile phone sources.
   public function correctImageOrientation($filename, Request $request) {
    
        if (function_exists('exif_read_data')) {          
          $exif = exif_read_data($filename);
         if($exif && isset($exif['Orientation'])) {
            $orientation = $exif['Orientation'];
            if($orientation != 1){
             $img = imagecreatefromjpeg($filename);            
              $deg = 0;
              switch ($orientation) {
                case 3:
                  $deg = 180;
                  break;
                case 6:
                  $deg = 270;
                  break;
                case 8:
                  $deg = 90;
                  break;
              }
              if ($deg) {
                $img = imagerotate($img, $deg, 0);        ;
              }

              imagejpeg($img, '/storage/'.Auth::user()->id."_".$request->file('image')->getClientOriginalName(), 95);
            }
            else{
              $img = imagecreatefromjpeg($filename);
              imagejpeg($img, 'storage/'.Auth::user()->id."_".$request->file('image')->getClientOriginalName(), 95);
            } // if there is some rotation necessary
          } // if have the exif orientation info
        } // if function exists      
      }
    
      
      
      //To update user profile details
      public function updateProfile(Request $request){    
          $request -> validate([
            'image' => 'image'
          ]);            
        $welcomeName = Auth::user(); 
        $user = User::find($welcomeName->id);
        $user -> email = $request->email;
        $user -> username = $request->name;       
        $user -> phone = $request->phone;
        $user -> location = $request->location ;
        $user -> talent = $request -> talent;
        $user -> about = $request -> about;
        $user -> category = $request -> category  ;
        $user -> first_name = $request -> firstname;
        $user -> last_name = $request -> lastname; 
        // $user -> update();   
        if ($request ->file('image') == null){
            $user -> update();
        }
        else{
            $image = $request->file('image');
            // $this->correctImageOrientation($image,$request);
            $filename = $request -> image -> getClientOriginalName();
          //  $request -> image -> storeAs('images',$filename);
         
         
            //  move_uploaded_file( $_FILES['file']['tmp_name'],'/uploads/images/'.$filename);
            move_uploaded_file($image,'/uploads/'.$filename);
            // $user -> image = Auth::user()->id."_".$request->file('image')->getClientOriginalName();            
            $user -> image = $filename;
            // $user -> update(['image'=>$filename);  
            $user -> update();
        }
        $welcomeName = Auth::user(); 
        return view('user/publicprofile',compact('welcomeName'));

        }

      


        //To return user profile when searched for.
        public function publicSearchProfile($username){           
            $welcomeName = User::where('username',$username)->first();
            return view('user.publicprofile',compact('welcomeName'));
    }
 

}

