
<html lang="en" dir="ltr">
    <head>
        
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="../vendor/spinkit.css" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="../vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="../css/material-icons.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="../css/fontawesome.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="../css/preloader.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="../css/app.css" rel="stylesheet">

</head>

<body class="layout-compact layout-sticky-subnav layout-compact">

    

        <!-- <div class="sk-bounce">
<div class="sk-bounce-dot"></div>
<div class="sk-bounce-dot"></div>
</div> -->

        <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
    

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push="" data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">

            <!-- Header -->
            <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body" id="default-navbar" data-primary="">

<!-- Navbar toggler -->
<button class="navbar-toggler d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
    <span class="material-icons">menu</span>
</button>

<!-- Navbar Brand -->
<a href="index.html" class="navbar-brand mr-16pt">
    <img class="navbar-brand-icon mr-0 mr-lg-8pt" src="../images/logo/api-logo.png" width="32" alt="">
    <span class="d-none d-lg-block">API</span>
</a>

<!-- <button class="btn navbar-btn mr-16pt ml-md-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->



<div class="flex"></div>



<div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
    
    
    <!-- // END Notifications dropdown -->

    <!-- Notifications dropdown -->
    
    <!-- // END Notifications dropdown -->
</div>


</div>
            <!-- // END Header -->

            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Edit Slide</h2>

                            <form id="sliderinsertform" action="{{route('slideupdate',$data->sdid)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                    
                                
                                  <div class="form-group">
                                    <label for="Title">Slide ID</label>
                                    <input type="text" name="sdid" class="form-control" id="slideid" value="<?php echo($data->sdid) ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="Title">Slide Title</label>
                                    <input type="text" name="slide_title" class="form-control" id="slidetitle" value="<?php echo($data->slide_title) ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="Slider Page">Slide Text</label>
                                    <input type="text" name="slide_text" class="form-control" id="slidertitle" value="<?php echo($data->slide_text);?>">
                                  </div> 
                                  <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Image file</label>
                                        <input type="file" name="slide_image"class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                </div>
                                  <button  class="btn btn-primary">Submit</button>
                                </form>

                            

                        </div>

                        

                    </div>

                    

                </div>
            </div>

            <div class="container page__container">
                
            </div>
            <div class="js-fix-footer footer border-top-2">
<div class="container page__container page-section d-flex flex-column">
    <p class="text-70 brand mb-24pt">
        <img class="brand-icon" src="../images/logo/api-logo.png" width="30" alt="Huma"> API
    </p>
    <p class="measure-lead-max text-muted mb-0 small">API is a beautifully crafted user interface for modern Business Admin Web Applications, with examples for many pages needed for Customer Relationship Management, Enterprise Resource Planning, Human Resources, Content Management System, Project Management, Tasks, eCommerce, Messaging and Account Management.</p>
</div>
<div class="pb-16pt pb-lg-24pt">
    <div class="container page__container">
        <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
            <div class="row">
                <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                    <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                    <nav class="nav nav-links nav--flush">
                        <a href="#" class="nav-link mr-8pt"><img src="../images/icon/footer/facebook-square@2x.png" width="24" height="24" alt="Facebook"></a>
                        <a href="#" class="nav-link mr-8pt"><img src="../images/icon/footer/twitter-square@2x.png" width="24" height="24" alt="Twitter"></a>
                        <a href="#" class="nav-link mr-8pt"><img src="../images/icon/footer/vimeo-square@2x.png" width="24" height="24" alt="Vimeo"></a>
                        <!-- <a href="#" class="nav-link"><img src="images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a> -->
                    </nav>
                </div>
                <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                    <a href="" class="btn btn-outline-white">English <span class="icon--right material-icons">arrow_drop_down</span></a>
                </div>
                <div class="col-md-4 text-md-right">
                    <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                        <a href="" class="text-white-70 text-underline mr-16pt">Terms</a>
                        <a href="" class="text-white-70 text-underline">Privacy policy</a>
                    </p>
                    <p class="text-white-50 small mb-0">Copyright 2019 © All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


        </div>
        <!-- // END drawer-layout__content -->

        <!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer layout-compact__drawer" id="default-drawer">
<div class="mdk-drawer__content js-sidebar-mini">

<div class="sidebar sidebar-mini sidebar-dark sidebar-left">

   <!-- Navbar toggler -->
   <ul class="nav flex-column flex-nowrap flex-shrink-0 sidebar-menu sm-item-bordered">
       <li class="sidebar-menu">
           <a class="sidebar-menu-button" href="{{route('admin-dashboard')}}">
               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
               <span class="">Dashboard</span>
           </a>
       </li>
       <li class="sidebar-menu-item">
           <a class="sidebar-menu-button" href="{{route('admin-settings')}}">
              <i class="fas fa-tools"></i>
               <span class="">Settings</span>
           </a>
       </li>
       <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="{{route('allheadersinfo')}}">
           <i class="fas fa-heading"></i>
            <span class="">Header</span>
        </a>
    </li>
    <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="{{route('admin-footer')}}">
           <i class="fas fa-shoe-prints"></i>
            <span class="">Footer</span>
        </a>
    </li>
    <li class="sidebar-menu-item">
           <a class="sidebar-menu-button" href="{{route('admin-slider')}}">
              <i class="fas fa-sliders-h"></i>
               <span class="">Slider</span>
           </a>
       </li>
       
       
       
   </ul>
</div>

<div class="sidebar sidebar-light sidebar-left flex sidebar-secondary sidebar-p-t" data-perfect-scrollbar="">
   <div class="tab-content">

       
</div>
        <!-- // END drawer -->
    </div>
    <!-- // END drawer-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="compact" :layout-location="{
  'compact': 'compact-analytics.html',
  'mini': 'mini-analytics.html',
  'app': 'analytics.html',
  'boxed': 'boxed-analytics.html',
  'sticky': 'sticky-analytics.html',
  'default': 'fixed-analytics.html'
}" sidebar-type="light" sidebar-variant="bg-body"></app-settings>
    </div>
    <!--jquery-->
    <!-- jQuery -->
<script src="../vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="../vendor/popper.min.js"></script>
<script src="../vendor/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="../vendor/perfect-scrollbar.min.js"></script>

<!-- DOM Factory -->
<script src="../vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="../vendor/material-design-kit.js"></script>

<!-- App JS -->
<script src="../js/app.js"></script>

<!-- Highlight.js -->
<script src="../js/hljs.js"></script>

<!-- Global Settings -->
<script src="../js/settings.js"></script>

<!-- Moment.js -->
<script src="../vendor/moment.min.js"></script>
<script src="../vendor/moment-range.js"></script>

<!-- Chart.js -->
<script src="../vendor/Chart.min.js"></script>
<script src="../js/chartjs.js"></script>
<script src="../js/chartjs-rounded-bar.js"></script>

<!-- Chart.js Samples -->
<script src="../js/page.analytics-2-dashboard.js"></script>

<!-- List.js -->
<script src="../vendor/list.min.js"></script>
<script src="../js/list.js"></script>

<!-- Tables -->
<script src="../js/toggle-check-all.js"></script>
<script src="../js/check-selected-row.js"></script>

<!-- Sidebar Mini JS -->
<script src="js/sidebar-mini.js"></script>
<script>
 (function() {
     'use strict';
     // ENABLE sidebar menu tabs
     $('#sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
         e.preventDefault()
         $(this).tab('show')
     })
 })()
</script>

<!-- App Settings (safe to remove) -->
<script src="js/app-settings.js"></script>
       

</body>
</html>