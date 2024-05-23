<html>
  <head>@include('layouts.header') <br />
    <title>@yield('title')</title>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container"> @include('layouts.sidebar') <div class="container"> @yield('content') </div>
      </div>
    </div> @include('layouts.footer')
  </body>
</html>