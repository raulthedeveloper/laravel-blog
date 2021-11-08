<?php

namespace App\Http\Controllers;


use App\Models\Post;

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
        return view('posts.create-post')->with("title","Create Post");
    }

    public function editPostForm()
    {
        return view('posts.edit-post')->with("title","Edit Post");
    }

    public function deletePostForm()
    {
        return view('posts.delete-post');
    }

    public function create(Request $request)
    {


        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'main_text' => 'required',
            'featured_image'=>'required | max:255',
            'category' =>'required'
        ]);


        $post_slug = uniqid('',false);
        
        // Add Validation

        $post = new Post;

        $post->post_id = uniqid('', true);
        $post->title = $request->title;
        $post->main_text = $request->main_text;
        $post->featured_image = $request->featured_image;
        $post->category = $request->category;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
