@extends('layouts.dashboard')

@section('content')



<div class="container">
    <div class="mb-3"  >
        <a href="{{ route('admin_posts')}}" class="btn btn-dark">Back</a>
    <a href="{{ route('blog') }}/{{$post->slug}}/{{$post->id}}" class="btn btn-primary">View</a>
    </div>
    
    
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
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
            <form action="{{ route('update_post',[$post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="post_title" aria-describedby="post_title" name="title"
                        value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Body</label>
                    <textarea id="summernote" class="form-control" id="exampleFormControlTextarea1" name="main_text"
                        rows="6">{{$post->main_text}}</textarea>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Image</label>
                            <input name="featured_image" type="file" class="form-control-file">
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Category</label>
                            <select name="category" class="form-control" value="{{$post->category}}">
                                @foreach ($categories as $category)
                                <option>{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Posts Images</label>
                            <input name="featured_image" type="file" class="form-control-file" multiple>
                          </div>
                </div>
                </div>

                    



                <button id="submit_post" class="btn btn-success">Submit</button>

                

            </form>
        </div>

        <div class="col-md-4 col-sm-12">
            <div>
                <form action="{{URL::to('/')}}/add_category" method="POST">
                    @csrf
                    <label for="inputPassword5" class="form-label">New Category</label>
                    <input type="text" id="inputPassword5" class="form-control mb-3" name="category"
                        aria-describedby="passwordHelpBlock">

                    <button class="btn btn-success" id="submit_category">Add</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal">Remove</button>


                </form>

            </div>
        </div>
    </div>
</div>
@endsection
