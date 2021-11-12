<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\BlogCategories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("blog.feature")->with("title","Blog");
    }

    public function createNewCategory(Request $request)
    {
        

        $new_category= new BlogCategories;

        $new_category->category = $request->category;

        $new_category->save();
        
        return redirect()->back()->with('cat_message','Category Added');
    }

    public function deleteCategory(){

    }

    public function archive(Request $request)
    {
        // $posts = DB::select('select * from posts');;
        $posts = Post::get();

        // return $posts;

        
        return view("blog.archive")->with('title',"Archive")->with('posts',$posts);
    }

    public function single($id)
    {
        // grab data from database with id and pass to view

        $post = Post::where('slug',$id)->first(); 



        return view("blog.single")->with('title',$post->title)->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createPostForm()
    {
        $catergories = DB::table('blog_categories')->get();

        
        return view('posts.create-post')->with("title","Create Post")->with("categories",$catergories);
    }

    public function editPostForm($id, Request $request)
    {
        
    //    $post = Post::where('post_id', $id);
    $catergories = DB::table('blog_categories')->get();
   
    $post =  Post::where('post_id', $id)->first();
       
        return view('posts.edit-post')->with("title","Edit Post")->with('post',$post)->with('categories',$catergories)->with('message','Post Updated');
    }

    public function deletePostForm()
    {
        return view('posts.delete-post');
    }

    public function create(Request $request)
    {
        $first_name = auth()->user()->first_name;
        $last_name = auth()->user()->last_name;

        $author = "{$first_name} {$last_name}";
        

        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'main_text' => 'required',
            'featured_image'=>'required | max:255',
            // 'category' =>'required'
        ]);


        $post_slug = uniqid('',false);
        
        // Add Validation

        $post = new Post;

        $post->post_id = uniqid('', true);
        $post->title = $request->title;
        $post->main_text = $request->main_text;
        $post->featured_image = $request->featured_image;
        $post->category = $request->category;
        $post->author = $author;
        $post->user_id = auth()->user()->id;
        // Creates slug with title of blog
        // $post->slug = str_replace(" ", "_", $request->title);
        $post->slug = $post_slug;

        $post->save();
        
        return redirect()->back()->with('message','Post Added');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        // auth()->user()->id;
        //Shows all post in a table
        $userId = auth()->user()->id;
        $posts = Post::where('user_id', $userId)->get();

        return view('posts.admin-posts')->with('title','Your Posts')->with('posts',$posts);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Post page that displays all of the posts with crud functionality
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Used to change form a add update to db
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        Post::where('post_id',$id)->update(['title'=>$request->title,'main_text'=>$request->main_text,'featured_image'=>$request->featured_image,'category'=>$request->category]);
        return redirect()->back()->with('message', 'Post Updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        Post::where('post_id', $id)->delete();


        return redirect()->back()->with('message', 'Post deleted.');
    }
}
