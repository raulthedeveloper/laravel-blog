@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action=" {{URL::to('/')}}/create_post" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="post_title" aria-describedby="post_title" name="title">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Body</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="main_text" rows="6"></textarea>
                  </div>

                  <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Featured Image (url)</label>
                            {{-- <input name="featured_image" type="file" class="form-control-file" id="exampleFormControlFile1"> --}}
                            <input class="form-control" name="featured_image" type="text">
                          </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Category</label>
                            <select name="category" class="form-control">
                                <option>Life Style</option>
                                <option>Design</option>
                                <option>Home</option>

                              </select>
                        </div>
                        
                      </div>
                  </div>

                  
                
                  
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
