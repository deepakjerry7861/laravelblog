<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {

        Return view('index'); 
    }
    public function blogs()
    {
        return view ('blogs');
    }   
     public function contact()
     {
        return view ('contact');
    }
    public function single_post()
    {
        return view('single-post');
    }
    public function about(){
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
}
