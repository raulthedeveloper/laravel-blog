@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($posts as $post)
        
   
    <div class="row mb-3">
        <div class="card m-auto w-100" >
            <div class="row g-0">
              <div class="col-md-4">
                <img  src="{{$post->featured_image}}" class="img-fluid rounded-start h-100" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body"><h3>{{$post->title}}</h3>
                  <p class="card-text"> {{Str::words($post->main_text,30)}}</p>

                  @if($post->created_at != $post->updated_at)
                  <p class="card-text text-muted">Last Updated: {{$post->updated_at->isoFormat('dddd D, Y')}}</p>
                  @endif

                  <span class="badge bg-dark text-light py-2 px-4">{{$post->category}}</span>                 

                  

                  <p class="card-text mt-3"><span><strong>Author:</strong></span><span class="text-muted"> {{$post->author}}</span></p>
                  <p class="card-text"><span>Published:</span><span class="text-muted"> {{$post->created_at->isoFormat('dddd D, Y')}}</span></p>

                  <div>
                    
                    <a href="{{ route('blog') }}/{{$post->category}}/{{$post->slug}}" class="btn-success btn">
                      Read More
                  </a>
                  </div>
                  
               
                </div>
              </div>
            </div>
          </div>
    </div>

    @endforeach
    
</div>
@endsection