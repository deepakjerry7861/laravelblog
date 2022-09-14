<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin/index');
    }
    public function admin_login(){
        return view('admin.sign-in');
    }
    public function sign_up()
    {
        return view('admin.sign-up');
    }
    public function create_new_blog()
    {
        return view('admin.blog.create-new');
    }
    public function blog_list()
    {
        return view ('admin.blog.blog-list');
    }
    public function save_create_new_blog(Request $request){
       

         $validated = $request->validate([
        'blogtitle' => 'required',
        'category' => 'required',
        'featuredimage' => 'required',
        'description' => 'required',
    ]);
        
    }
}
