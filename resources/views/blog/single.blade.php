@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <img class="w-100" style="max-height:500px" src="{{asset("storage/images/post_images/".$post->featured_image)}}" alt="">
    </div>

    <div class="row">
        <p>{{$post->main_text}}</p>    
    </div>

    <div class="row d-flex">
<span class="badge badge-primary m-3" >Primary</span>
<span class="badge badge-secondary m-3">Secondary</span>
<span class="badge badge-success m-3">Success</span>
<span class="badge badge-danger m-3">Danger</span>
<span class="badge badge-warning m-3">Warning</span>
<span class="badge badge-info m-3">Info</span>
<span class="badge badge-light m-3">Light</span>
<span class="badge badge-dark m-3">Dark</span>
    </div>
</div>

@endsection