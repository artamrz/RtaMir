<!doctype html>
<html lang="en">

  <head>

    @include('partials._head')

  </head>
  <body>

    @include('partials._nav')

   <div class="container py-4">
      
      @include('partials._messages')
      @yield('content')

   </div>

    @include('partials._footer')
  
    @include('partials._javascripts') 


  </body>
</html>