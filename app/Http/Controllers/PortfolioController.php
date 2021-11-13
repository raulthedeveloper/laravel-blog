<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.portfolio')->with("title","My Portfolio");
    }

    public function single(Request $request)
    {
        return view('portfolio.single')->with("title",$request->title);
    }

    public function createNewCategory(Request $request)
    {


        $new_category= new PortfolioCategories;

        $new_category->category = $request->category;

        $new_category->save();
        
        return redirect()->back()->with('message','Category Added');

    }

    public function createForm()
    {
        $catergories = DB::table('item_categories')->get();

        
        return view('portfolio.create-item-form')->with("title","Create Item")->with("categories",$catergories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $first_name = auth()->user()->first_name;
        $last_name = auth()->user()->last_name;

        $owner = "{$first_name} {$last_name}";
        

        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
            'images'=>'required | max:255',
            // 'category' =>'required'
        ]);


        $item_slug = uniqid('',false);

        
        
        // Add Validation

        $portfolio = new Portfolio;

        $portfolio->item_id = uniqid('', true);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->images = $request->images;
        $portfolio->category = $request->category;
        $portfolio->owner = $owner;
        $portfolio->user_id = auth()->user()->id;
        // Creates slug with title of blog
        // $post->slug = str_replace(" ", "_", $request->title);
        $portfolio->slug = $item_slug;

        $portfolio->save();
        
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

    public function showAllItems()
    {
        $userId = auth()->user()->id;
        $posts = Portolio::where('user_id', $userId)->get();

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
