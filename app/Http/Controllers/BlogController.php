<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\PostImages;
use App\Models\BlogCategories;
use Illuminate\Support\Facades\Storage;

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

    public function single($cat,$id)
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
            'featured_image'=>'required | max:5330',
            'category' =>'required',
            // 'post_images' => 'max:4',
            // 'post_images.*'=> 'mimes:jpg,jpeg,png'
        ]);


        $post_id = hexdec(uniqid());
        
        // Add Validation

        $post = new Post;

       

        $this->uploadFeaturedImage($request,$post);

        
        $post->id = $post_id;
        $post->title = $request->title;
        $post->main_text = $request->main_text;
        $post->category = $request->category;
        $post->author = $author;
        
        $post->user_id = auth()->user()->id;
        // Creates slug with title of blog
        // $post->slug = str_replace(" ", "_", $request->title);
        $post->slug = $post_id;

        $post->save();

        $this->uploadPostImages($request,$post_id);
        
        
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

        $userId = auth()->user()->id;
        $posts = Post::where('user_id', $userId)->get();

        return view('posts.admin-posts')->with('title','Your Posts')->with('posts',$posts);
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

        $this->uploadFeaturedImage($request,$id,true);

        Post::where('post_id',$id)->update(['title'=>$request->title,'main_text'=>$request->main_text,'category'=>$request->category]);
        return redirect()->back()->with('message', 'Post Updated.');

    }

    public function uploadPostImages($request,$id,$update=false)
    {


        // $post_images= new PostImages;
        dd($request->post_images);


        if($request->hasFile('post_images'))
        {
          

            $image_payload = $request->post_images;
            
            foreach($image_payload as $image)
            {
                $filename = $image->getClientOriginalName();
                $filenameExploded = explode(".", $filename);
            
            //Adds unique Id to avatar image name to prevent deletion of same name
                $filenameWithId = implode(".",[$filenameExploded[0] . uniqid('_', false),$filenameExploded[1]]);


                DB::table('post_images')->insert([
                    'post_id' => $id,
                    'image' => $filenameWithId
                ]);

                $request->featured_image->storeAs('images/post_images',$filenameWithId,'public');

                
                // Also Save images in folder


            


            }

            
            


            
        }

    }

    public function uploadFeaturedImage($request,$post,$update=false)
    {

        // dd($request->featured_image);
        // if an update is happing $post is the id of the Post used for updating current posts

        if($request->hasFile('featured_image'))
            {
         
            $filename = $request->featured_image->getClientOriginalName();
            $filenameExploded = explode(".", $filename);
            
            //Adds unique Id to avatar image name to prevent deletion of same name
           $filenameWithId = implode(".",[$filenameExploded[0] . uniqid('_', false),$filenameExploded[1]]);

            
           

            $request->featured_image->storeAs('images/post_featured_images',$filenameWithId,'public');

        //    Checks if post is being updated

            if($update)
            {

                $currentImage =  DB::table('posts')->where('post_id', $post)->first();

                
        //    Checks if there is a previous featured image if so it gets deleted

                if($currentImage->featured_image)
                    {
                        Storage::delete('/public/images/post_featured_images/' . $currentImage->featured_image);
                        Post::where('post_id',$post)->update(['featured_image'=>$filenameWithId]);
                    }

            }
            else
            {
                $post->featured_image = $filenameWithId;
            }
            
            


            }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currentImage =  DB::table('posts')->where('post_id', $id)->first();

        Storage::delete('/public/images/post_images/' . $currentImage->featured_image);

        Post::where('post_id', $id)->delete();


        return redirect()->back()->with('message', 'Post deleted.');
    }
}
