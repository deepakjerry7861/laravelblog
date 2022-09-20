<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

use DB;

class FrontendController extends Controller
{
    //
    public function index()
    {

        $post = DB::table('blogs')->get();

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
}
