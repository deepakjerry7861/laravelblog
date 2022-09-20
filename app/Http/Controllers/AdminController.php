<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
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
        $category = DB::table('categories')->get();
        return view('admin.blog.create-new',compact('category'));
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
             'description' => 'required',
        ]);

         $post = Blog::find($id);

                if($featuredimage = $request->file('featuredimage')) 
                {
                    $destinationPath = 'featuredimage/';
                    $profilepic = date('YmdHis') . "." . $featuredimage->getClientOriginalExtension();
                    $featuredimage->move($destinationPath, $profilepic);
                    $post['featuredimage'] = "$profilepic";
                }
                else{
                    unset($post['profilepic']);
                    }
        
        $post->blogtitle = $request->blogtitle;
        $post->category = $request->category;
        $post->description = $request->description;
        // $post->featuredimage = $request->featuredimage;
        $post->save(); 



      return redirect('/admin/blog-list')->with('status', 'Blogs has been Updated  🥳!');

    }

    public function blogview($id)
    {

        
        $blog=DB::select('select * from blogs where id = ?', [$id]);
        return view('/admin/blog/blog-view',compact('blog'));

    }

    public function add_category(Category $category)
    {
          $category = DB::table('categories')->get();
          return view('admin.blog.add-category',compact('category'));
    }
    public function save_category(Request $request)
    {
        
            $category = new Category;
            $category->category = $request->category;
            $category->save();
        return redirect('/admin/add-category')->with('status', 'Category  has been added  🥳!');


    }

}
