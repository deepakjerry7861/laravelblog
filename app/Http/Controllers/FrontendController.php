<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Controllers\Str;

use DB;

class FrontendController extends Controller
{
    //
    public function index()
    {
          $post = Blog::where('status','1')->orderBy('blogtitle','ASC')->take(10)->get();
        // $post = DB::table('blogs','ASC')->get();


        Return view('index',compact('post')); 
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
    public function kingurl(){
        $mySlug = \Str::slug('It Solutions provide laravel examples my ..Deepak jery');
        print_r($mySlug);
    }
}
