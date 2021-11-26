@include('includes.head')
<body>
    
 



<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  @include('includes.sidebar-nav')
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container">
      
      @if(isset($title))
      <h2>{{$title}}</h2>
        {{-- @include('../includes/secondaryhero',['title',$title])   --}}
        
        @else
        <h2>Pro Sidebar</h2>
        @endif
      <hr>
      


      <div id="app">
        
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>






      <hr>

      <footer class="text-center">
        <div class="mb-2">
          
        </div>
        
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        

        </body>
        </html>
        
