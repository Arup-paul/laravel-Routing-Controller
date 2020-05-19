<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }

    // public function contact(){
    //    return view('contact');
    // }
}
