@include('includes.head')
<body>
    <div id="app">
        @if(isset($title))
        @include('../includes/secondaryhero',['title',$title])        
        @endif
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    
    <script>
        

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

@include('includes.footer')
</body>
</html>
