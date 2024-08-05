<!DOCTYPE html>
<html class="no-js" lang="en_AU" >
    @include('front.partials.head')

  <body data-instant-intensity="mousedown">

    @include('front.partials.header')



    @yield('hero-content')
 
    @yield('page-content')



    @include('front.partials.footer-scripts')

  </body>
</html>