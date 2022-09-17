<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

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

          $allblogs = DB::table('blogs')->get();


    return view('admin.blog.blog-list',['allblogs'=>$allblogs]);

        // return view('admin.blog.blog-list', compact('allblogs'));
    }


    public function save_create_new_blog(Request $request){
       

     $request->validate([
        'blogtitle' => 'required',
        'category' => 'required',
        'featuredimage' =>'mimes:jpeg,webp,jpg,png,gif|required|max:10000',
        'description' => 'required',
    ]);

          $input = $request->all();
        
        if ($featuredimage = $request->file('featuredimage')) {
            $destinationPath = 'featuredimage/';
            $profilepic = date('YmdHis') . "." . $featuredimage->getClientOriginalExtension();
            $featuredimage->move($destinationPath, $profilepic);
            $input['featuredimage'] = "$profilepic";
        }
        Blog::create($input);

        return redirect('/admin/blog-list')->with('status', 'Congratulation 🥳 !! Blog Has Created .');
    }


    public function blogedit($id)
    {
        $viewdata= DB::select('select * from blogs where id = ?', [$id]);
        return view('/admin/blog/edit')->with('viewdata',$viewdata);
    }


    public function blogDelete($id)
    {
         DB::delete('delete from blogs where id = ?',[$id]);

        return redirect('/admin/blog-list')->with('deletesms', 'Blog  has been Deleted  ☹️!');

    }

   public function update(Request $request ,$id)
    {
         $request->validate([
        'blogtitle' => 'required',
        'category' => 'required',
        'featuredimage' =>'mimes:jpeg,webp,jpg,png,gif|required|max:10000',
        'description' => 'required',
    ]);

         $post = Blog::find($id);

         if($featuredimage = $request->file('featuredimage')) {
                        $destinationPath = 'featuredimage/';
                        $profilepic = date('YmdHis') . "." . $featuredimage->getClientOriginalExtension();
                        $featuredimage->move($destinationPath, $profilepic);
                        $post['featuredimage'] = "$profilepic";
                        }
        else{
            unset($post['featuredimage']);
            }
        
         $post->blogtitle = $request->blogtitle;
        $post->category = $request->category;
        $post->description = $request->description;
        // $post->featuredimage = $request->featuredimage;
        $post->save(); 

       //  $blogtitle = $request->input('blogtitle');
       //  $category = $request->input('category');
       //  $featuredimage = $request->input('featuredimage');
       //  $description = $request->input('description');
       // DB::update('update blogs set blogtitle=?, category= ?,featuredimage= ?,description= ? where id = ?',[$blogtitle,$category,$featuredimage,$description,$id]);


        //  print_r($blogtitle);
        //  echo'<br>';
        // print_r($category);
        //          echo'<br>';
        // print_r($featuredimage);
        //          echo'<br>';
        // print_r($description);

        // die();


      return redirect('/admin/blog-list')->with('status', 'Blogs has been Updated  🥳!');

    }



}
