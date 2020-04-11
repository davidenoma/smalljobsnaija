<?php

namespace App\Http\Controllers\Open;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchResultController extends Controller
{
    //
    public function index(){
        return view('public.searchResult');
    }
}
