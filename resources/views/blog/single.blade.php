@extends('layouts.app')

@section('content')

{{-- {{$post}} --}}

<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="d-flex">
               

                  <button type="button" class="btn btn-primary my-1 mr-1"><i class="fab fa-facebook"></i>Facebook</button>
                <button type="button" class="btn btn-success m-1"><i class="fab fa-instagram"></i></i>Instagram</button>
                <button type="button" class="btn btn-info m-1"><i class="fab fa-linkedin"></i>Linkdin</button>
                <button type="button" class="btn btn-dark m-1"><i class="far fa-envelope"></i>Email</button>


            </div>
            {{-- <img class="w-100" style="max-height:500px" src="{{asset("storage/images/post_images/".$post->featured_image)}}" alt=""> --}}
            <img class="w-100" style="max-height:500px" src="{{ asset("storage/images/post_featured_images/". $post->featured_image) }}" alt="">

            <span>Author: {{$post->author}} | </span>
            <span>Date: 3/12/22 | </span>
            <span>Category: {{$post->category}} </span>

            <p class="mt-3">{!! $post->main_text !!}</p> 


          
        </div>
        <div class="col-md-4" style="background-color:#e9ecef;">
            
            <form class="d-flex my-5">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>

              <div>
                  <h5 class="font-weight-bold">Recent Blog Posts</h5>

                  @foreach ($recent_posts as $post)
                     <p><a href="{{ route('blog') }}/{{$post->category}}/{{$post->slug}}">{{$post->title}}</a></p> 
                     
                  @endforeach

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deleniti illum reprehenderit atque praesentium</p>

                  <hr>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deleniti illum reprehenderit atque praesentium</p>

                  <hr>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deleniti illum reprehenderit atque praesentium</p>

                  <hr>

                  <h5 class="font-weight-bold mb-2">Blog Categories</h5>

                  {{-- {{$categories}} --}}

                  <div style="height: 300px; overflow:scroll">

                    @foreach ($categories as $category)
                    <hr>
                    {{-- Will link to the archives with that category --}}
                    <a href="#">{{$category->category}}</a>
                    @endforeach

                    
                   
  
                    <hr>
                  </div>
                 
                  
              </div>

        </div>
    </div>


    {{-- <div class="row">
        <img class="w-100" style="max-height:500px" src="{{asset("storage/images/post_images/".$post->featured_image)}}" alt="">
    </div>

    <div class="row">
        <p>{{$post->main_text}}</p>    
    </div>

    <div class="row d-flex">

    </div> --}}
</div>

@endsection