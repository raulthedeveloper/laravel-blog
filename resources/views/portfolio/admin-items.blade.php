@extends('layouts.dashboard')

@section('content')

<div class="container">
  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
  @endif
  <div class="row">
   
    <div class="col">
      <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Categories</th>
              <th scope="col">Date</th>
              <th scope="col">View</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
            <tr>
              <th scope="row">1</th>
              <td>{{$item->title}}</td>
              <td>{{$item->author}}</td>
              <td>{{$item->category}}</td>
              <td>{{$item->created_at->isoFormat('dddd D, Y')}}</td>
              <td><a href="{{ route('blog') }}/{{$item->slug}}" class="btn btn-primary">View</a></td>
              <td><a href="{{ route('edit_post_form',[$item->post_id]) }}" class="btn btn-secondary">Edit</a></td>
              <td><button type="button" class="btn btn-danger" onclick="deletePost('{{ route('delete_post',[$item->item_id]) }}')">
                Delete
              </button>
              </td>
            </tr>
            @endforeach

      
          </tbody>
      </table>
    </div>
  </div>
</div>




@endsection
