<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.landing.head')
  </head>
  <body>
  	@include('layouts.landing.nav')
    <!-- END nav -->

    @yield('content')

    @include('layouts.landing.footer')

    @include('layouts.landing.script')

  </body>
</html>
