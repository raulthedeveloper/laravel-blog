@extends('layouts.dashboard')

@section('content')
<div class="container">

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

            <form action=" {{URL::to('/')}}/create_post" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="post_title" aria-describedby="post_title" name="title"
                        value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Body</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="main_text" rows="6"
                        value="{{ old('main_text') }}"></textarea>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Featured Image (url)</label>
                            {{-- <input name="featured_image" type="file" class="form-control-file" id="exampleFormControlFile1"> --}}
                            <input class="form-control" name="featured_image" type="text"
                                value="{{ old('featured_image') }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Category</label>
                            <select name="category" class="form-control" value="{{ old('category') }}">
                                @foreach ($categories as $category)
                                <option>{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>
 

                    </div>
                </div>



                <button id="submit_post" class="btn btn-primary">Submit</button>
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
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Remove</button>
                    

                </form>

            </div>
        </div>
    </div>
</div>

@include('includes.delete_category_modal')
@endsection
