<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{   
    public function uploadPicture(Request $request){
        // $path = Storage::putFile('public', $request->file('image'));                                                      
        $path = $request->file('image')->storeAs(
            'public', $request->user()->id."_".$request->file('image')->getClientOriginalName()
        );    
        dd($path)               ;
    }

}
