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
use Intervention\Image\ImageManagerStatic as Image;


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
   public function correctImageOrientation($filename, Request $request) {
        if (function_exists('exif_read_data')) {
          $exif = exif_read_data($filename);
        //   dd($exif);
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
                $img = imagerotate($img, $deg, 0);        
              }
              // then rewrite the rotated image back to the disk as $filename 
            //   Storage::putFileAs(
            //     'public', $img  , Auth::user()->id."_".$request->file('image')->getClientOriginalName()
            // );           
             imagejpeg($img, 'storage/'.Auth::user()->id."_".$request->file('image')->getClientOriginalName(), 95);
            } // if there is some rotation necessary
          } // if have the exif orientation info
        } // if function exists      
      }
      
    public function updateProfile(Request $request){    
          $request -> validate([
            'image' => 'image'
          ]);
        // $user = App\User::find(1);        
        $welcomeName = Auth::user();    
        $user = User::find($welcomeName->id);
        $user -> email = $request->email;
        $user -> username = $request->name;       
        // $user -> password = $request->password;
        $user -> phone = $request->phone;
        $user -> location = $request->location ;
        $user -> talent = $request -> talent;
        $user -> about = $request -> about;
        $user -> first_name = $request -> firstname;
        $user -> last_name = $request -> lastname;

    
        
        if ($request ->file('image') == null){
            $user -> update();
        }
        else{
            // $img = Image::make($request->file('image'))->resize(300, 200,function($constraint){
            //     $constraint->aspectRatio();
            // })->encode('jpg',75);
            // Image::configure(array('driver' => 'imagick'));
                      

            // $img = Image::make($request->file('image'));
            // $img->storeAs(
            //     'public', Auth::user()->id."_".$request->file('image')->getClientOriginalName()
            // );
            $image = $request->file('image');
            $this->correctImageOrientation($image,$request);
            // Storage::putFileAs(
            //     'public', $image   , Auth::user()->id."_".$request->file('image')->getClientOriginalName()
            // );           
            $user -> image = Auth::user()->id."_".$request->file('image')->getClientOriginalName();            
            $user -> update();  
        }
        
        
        // dd($user);
        

        return view('user/publicprofile',compact('welcomeName'));

}
 

}

