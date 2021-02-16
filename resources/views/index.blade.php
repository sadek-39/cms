<!DOCTYPE html>
<html lang="en"
      dir="ltr">

        <head>
        @include('layouts/_head')
        @include('layouts/_css')
        <style>
            .mdk-header__bg-front{
                opacity:1;
                animation: mymove 5s infinite;
            }
             @keyframes mymove {
            50% {border: 110px solid yellowgreen;border-bottom: 80px solid rgb(255, 255, 255);}
              }
              .mdk-header__bg-front {
                  opacity:1;
              }
              .mdk-header__bg{
                  opacity:1;
              }
            
            .t-shirt{
                font-size: 3em;
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

        <!-- <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content"> -->

                <!-- Header -->
                @include('layouts/_headerindex')
        
                <!-- // END Header -->

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->
                <!--background image-->

                  
             <!-- Header Layout Content -->
             @include('layouts/_indexHeaderLayoutContent')
             
                <!-- // END Page Content -->

                <!-- Footer -->

               @include('layouts/_footer')

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            <!-- Drawer -->

            

            <!-- // END Drawer -->

        </div>

        <!-- // END Drawer Layout -->

        @include('layouts/_js')

    </body>

</html>