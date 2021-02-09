<!DOCTYPE html>
<html>
   <head>
      <style>
         html {
                  scroll-behavior: smooth;
                }
      </style>

   </head>
   <body>
      @include('layouts/navbar_index')
      @yield('content')
   </body>
</html>