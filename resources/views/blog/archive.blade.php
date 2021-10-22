@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <div class="row mb-3">
        <div class="card m-auto" >
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/interior-design-hbx030120raji-009-copy-1580424230.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                  <a href="#" class="btn-success btn">
                    Read More
                </a>
                </div>
                
              </div>
            </div>
          </div>
    </div> --}}
    @foreach ($posts as $post)
        
   
    <div class="row mb-3">
        <div class="card m-auto w-100" >
            <div class="row g-0">
              <div class="col-md-4">
                <img  src="{{$post->featured_image}}" class="img-fluid rounded-start h-100" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">{{$post->title}}</h5>
                  <p class="card-text">{{$post->main_text}}</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>


                  <a href="{{ route('blog') }}/{{$post->slug}}" class="btn-success btn">
                    Read More
                </a>
               
                </div>
              </div>
            </div>
          </div>
    </div>

    @endforeach
    
</div>
@endsection