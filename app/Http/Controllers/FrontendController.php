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
        $post = Blog::where('status','1')->orderBy('created_at','DESC')->take(5)->get();
        $postall = Blog::where('status','1')->orderBy('created_at','ASC')->take(110)->get();

        Return view('index',compact('post','postall')); 
    }

    public function blogs()
    {
       $postall = Blog::where('status','1')->orderBy('created_at','DESC')->take(110)->get();


        return view ('blogs',compact('postall')); 
    }   
     public function contact()
     {
        return view ('contact');
    }
    public function single_post($category, $slug)
    {
         $tranding = Blog::where('category','=','tranding')->count();
        $bollywood = Blog::where('category','=','bollywood')->count();
        $job = Blog::where('category','=','job')->count();
        $hollywood = Blog::where('category','=','hollywood')->count();
        $explore = Blog::where('category','=','explore')->count();

        $post= DB::select('select * from blogs where slug = ?', [$slug]);
        return view('single-post',compact('post','hollywood','bollywood','tranding','job','explore'));

       
return view('single-post',compact('slug'));

    // $post = Blog::where('slug')->get();
    // print_r($post);die();
    // return view('single-post',compact('post'));
    }
    public function about(){
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    // public function kingurl(){
    //     $mySlug = \Str::slug('It Solutions provide laravel examples my ..Deepak jery');
    //     print_r($mySlug);
    // }
}
