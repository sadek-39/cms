<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        @include('layouts/_head')
        @include('layouts/_css')
        <style>
            .t-shirt{
                font-size:3em;

            }
        </style>

    </head>

    <body class="layout-app ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Drawer Layout -->

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->
                @include('layouts/_headermyaccount')

                
                <!-- // END Header -->
                 <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->
                 <!-- Page Content -->
                 @yield('content')

                 <!-- // END Page Content -->

                 <!-- Footer -->

                @include('layouts/_footer')

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            <!-- Drawer -->
            @include('layouts/_drawer')

            
            <!-- // END Drawer -->

        </div>

        <!-- // END Drawer Layout -->

        <!-- jQuery -->
        @include('layouts\_js')
    </body>

</html>
