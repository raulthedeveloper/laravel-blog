@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="mb-3"  >
        <a href="{{ route('admin_posts')}}" class="btn btn-dark">To Posts</a>
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

            <form action=" {{URL::to('/')}}/create_post" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="post_title" aria-describedby="post_title" name="title"
                        value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Body</label>
                    <textarea id="summernote" class="form-control" id="exampleFormControlTextarea1" name="main_text" rows="6"
                        value="{{ old('main_text') }}"></textarea>
                                {{-- <div id="summernote"></div> --}}

                </div>

                <div class="row">

                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Featured Image</label>
                            <input name="featured_image" type="file" class="form-control-file">
                          </div>
                    </div>
                    
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Category</label>
                            <select name="category" class="form-control" value="{{ old('category') }}">
                                @foreach ($categories as $category)
                                <option>{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>

                        

                    </div>
{{-- 
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Posts Images</label>
                            <input name="post_images[]" type="file" class="form-control-file" multiple>
                          </div>
                    </div> --}}
                </div>


                


                <button id="submit_post" class="btn btn-success">Submit</button>

              

            </form>

            
        </div>   
        
        {{-- <div id="summernote"></div> --}}


        <div class="col-md-4 col-sm-12">
            <div>
              



                <form action="{{URL::to('/')}}/add_category" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="inputPassword5" class="form-label">New Category</label>
                    <input type="text" id="inputPassword5" class="form-control mb-3" name="category"
                        aria-describedby="passwordHelpBlock">

                    <button class="btn btn-success" id="submit_category">Add</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Remove</button>
                    

                </form>

            </div>
        </div>
    </div>
</div>



@include('includes.delete_category_modal')
@endsection
