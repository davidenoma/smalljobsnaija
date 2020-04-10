<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingsController extends Controller
{
    //
    public function __construct(){

    }
    public function index(){
        return view('public.searchResult');
    }
}
