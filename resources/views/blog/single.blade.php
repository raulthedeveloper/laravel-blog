@extends('layouts.app')

@section('content')


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
            <img class="w-100" style="max-height:500px" src="https://mlbostoncommon.com/get/files/image/galleries/interior-deign-spacejoy-unsplash.jpg" alt="">

            <span>Author: Jane Doe | </span>
            <span>Date: 3/12/22 | </span>
            <span>Category: Design </span>

            <p class="mt-3">{{$post->main_text}}</p> 


            <h3>I am a Header</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet incidunt nihil ratione quo consectetur commodi velit tempore deleniti rem illo ipsum pariatur, consequatur nobis veniam, accusantium atque officia alias!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet incidunt nihil ratione quo consectetur commodi velit tempore deleniti rem illo ipsum pariatur, consequatur nobis veniam, accusantium atque officia alias!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet incidunt nihil ratione quo consectetur commodi velit tempore deleniti rem illo ipsum pariatur, consequatur nobis veniam, accusantium atque officia alias!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet incidunt nihil ratione quo consectetur commodi velit tempore deleniti rem illo ipsum pariatur, consequatur nobis veniam, accusantium atque officia alias!</p>
        </div>
        <div class="col-md-4" style="background-color:#e9ecef;">
            
            <form class="d-flex my-5">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>

              <div>
                  <h5 class="font-weight-bold">Recent Blog Posts</h5>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deleniti illum reprehenderit atque praesentium</p>

                  <hr>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deleniti illum reprehenderit atque praesentium</p>

                  <hr>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deleniti illum reprehenderit atque praesentium</p>

                  <hr>

                  <h5 class="font-weight-bold mb-2">Blog Categories</h5>

                  <div style="height: 300px; overflow:scroll">

                    <hr>
                    <a href="#">Lifestyle</a>
                    
  
                    <hr>

                    <a href="">Education</a>
                    
  
                    <hr>
                    <a href="">Festive</a>
                   
  
                    <hr>
                    <a href="">Design</a>
                    

                    <hr>
                   
                   
                    <a href="#">Lifestyle</a>
                    
  
                    <hr>

                    <a href="">Education</a>
                    
  
                    <hr>
                    <a href="">Festive<</a>
                   
  
                    <hr>
                    <a href="">Design</a>
                    

                    <hr>
                    <a href="">Lifestyle</a>
                   
  
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