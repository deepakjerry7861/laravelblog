<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Controllers\Str;
use DB;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    
    public function index()
    {
        if(Auth::check())
        {
            return view('admin/index');
        }

        return redirect("admin/login")->with('message', 'You are not allowed to access This is area!');

        
    }
   
   
    public function create_new_blog()
    {
        $category = DB::table('categories')->get();
        return view('admin.blog.create-new',compact('category'));
    }


    public function blog_list(Blog $blog)
    {


        $all = DB::table('blogs')->count();
        $tranding = Blog::where('category','=','tranding')->count();
        $bollywood = Blog::where('category','=','bollywood')->count();
        $job = Blog::where('category','=','job')->count();
        $hollywood = Blog::where('category','=','hollywood')->count();
        $explore = Blog::where('category','=','explore')->count();
         
        $allblogs = DB::table('blogs')->get();

    return view('admin.blog.blog-list',compact('allblogs','tranding','job','hollywood','bollywood','explore','all'));

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
           // $input->slug = \Str::slug($request->blogtitle);
          $input['slug'] = \Str::slug($request->blogtitle);

          $user = 'Admin';
          $input['user_type'] = $user;

        
        if ($featuredimage = $request->file('featuredimage')) {
            $destinationPath = 'featuredimage/';
            $profilepic = date('YmdHis') . "." . $featuredimage->getClientOriginalExtension();
            $featuredimage->move($destinationPath, $profilepic);
            $input['featuredimage'] = "$profilepic";
        }
         Blog::create($input);

        return redirect('/admin/blog-list')->with('status', 'Congratulation 🥳 !! Blog Has Been Created .');
    }

    public function status_update(Blog $Blog , Request $request)
    {
        Blog::where('id',$request->id)->update(['status'=>$request->status]);      
        echo 1; exit;  
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
