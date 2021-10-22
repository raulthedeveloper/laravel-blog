
 @include('../includes/navbar')


<div class="jumbotron jumbotron-fluid">
    <div class="container">
      @if($title)
      <h1 class="display-4">{{$title}}</h1>
      @else 
      <h1 class="display-4">Blog Title</h1>
      @endif
      <p class="lead">Interior Designer Extraordinaire</p>
    </div>
  </div>