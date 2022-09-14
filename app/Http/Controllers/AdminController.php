<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;

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
        
        $blogtitle = $request->input('blogtitle');
        $category = $request->input('category');
        $featuredimage = $request->input('featuredimage');

        $description = $request->input('description');

        if ($featuredimage = $request->file('featuredimage')) {
            $destinationPath = 'featuredimage/';
            $profilepicss = date('YmdHis') . "." . $featuredimage->getClientOriginalExtension();
            $featuredimage->move($destinationPath, $featuredimage);
            $input['featuredimage'] = "$featuredimage";
        }


        $data=array(
        'blogtitle'=>$blogtitle,
        'category'=>$category,
        'featuredimage'=>$profilepicss,        
        'description'=>$description);
        DB::table('blogs')->insert($data);


        return redirect('/datalist')->with('status', 'Student Registered !!');
    }
}
