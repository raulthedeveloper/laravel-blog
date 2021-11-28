

@include('../includes/navbar')

<div class="jumbotron jumbotron-fluid" style="background-image: https://images.pexels.com/photos/2507016/pexels-photo-2507016.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">

    <div class="container">
      @if($title)
      <h1 class="display-4">{{$title}}</h1>
      @else 
      <h1 class="display-4">Blog Title</h1>
      @endif
      <p class="lead">Interior Designer Extraordinaire</p>
    </div>
  </div>


  
