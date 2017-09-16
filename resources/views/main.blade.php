<!DOCTYPE html>
<html lang="en">
  <head>

    @include('partials._head')
  
  </head>
  {{-- <body class="{{ Request::is('/') ? "homepage" : "" }}"> --}}
  <body class="@if(Request::is('/'))homepage @elseif(Request::is('about'))about @elseif(Request::is('contact'))contact @elseif(Request::is('home'))home @endif">

  @include('partials._nav')

    <div class="container">
            
            @include('partials._messages')

            @yield('content')
                
            @include('partials._footer')

    </div> <!--End of .container-->

        @include('partials._javascript')

  </body>
</html>

