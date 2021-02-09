<!DOCTYPE html>
<html lang="en"
      dir="ltr">
      
    <head>
        {{-- @include('layouts/_head') --}}
        @include('layouts/_css')
        

    </head>

    <body class="layout-compact layout-sticky-subnav layout-compact">

        {{-- <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div> --}}

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->
                @include('layouts/_headeradmin')

                <!-- // END Header -->

                <div class="border-bottom-2 py-32pt position-relative z-1">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Analytics</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Dashboard

                                    </li>

                                </ol>

                            </div>

                            {{-- <div class="dropdown">
                                <a href=""
                                   class="border rounded d-flex align-items-center p-16pt"
                                   data-toggle="dropdown"
                                   data-caret="false">

                                    <div class="avatar avatar-sm mr-8pt">

                                        <span class="avatar-title rounded bg-primary">FM</span>

                                    </div>

                                    {{-- <small class="ml-4pt flex">
                                        <span class="d-flex align-items-center">
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-100">FrontendMatter Inc.</strong>
                                                <span class="text-50">Select company</span>
                                            </span>
                                            <i class="material-icons icon-16pt text-50 ml-4pt">arrow_drop_down</i>
                                        </span>
                                    </small> 
                                </a>
                                <div class="dropdown-menu w-100">
                                    <div class="dropdown-header"><strong>Select company</strong></div>
                                    <a href=""
                                       class="dropdown-item active d-flex align-items-center">

                                        <div class="avatar avatar-sm mr-8pt">

                                            <span class="avatar-title rounded bg-primary">FM</span>

                                        </div>

                                        <small class="ml-4pt flex">
                                            <span class="d-flex flex-column">
                                                <strong class="text-black-100">FrontendMatter Inc.</strong>
                                                <span class="text-black-50">Administrator</span>
                                            </span>
                                        </small>
                                    </a>
                                    <a href=""
                                       class="dropdown-item d-flex align-items-center">

                                        <div class="avatar avatar-sm mr-8pt">

                                            <span class="avatar-title rounded bg-accent">HH</span>

                                        </div>

                                        <small class="ml-4pt flex">
                                            <span class="d-flex flex-column">
                                                <strong class="text-black-100">HumaHuma Inc.</strong>
                                                <span class="text-black-50">Publisher</span>
                                            </span>
                                        </small>
                                    </a>
                                </div>
                            </div> --}}

                        </div>

                        <div class="row"
                             role="tablist">
                            <div class="col-auto d-flex flex-column">
                                <h6 class="m-0">&dollar;12.3k</h6>
                                <p class="text-50 mb-0 d-flex align-items-center">
                                    Earnings
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                            <div class="col-auto border-left">
                                <h6 class="m-0">264</h6>
                                <p class="text-50 mb-0 d-flex align-items-center">
                                    Sales
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                            <div class="col-auto border-left">
                                <a href=""
                                   class="btn btn-accent">New Report</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container page__container">
                    @yield('content')

                </div>
                @include('layouts/adminfooter')



            </div>
            <!-- // END drawer-layout__content -->

            <!-- drawer -->
            @include('layouts/admindrawer')

            <!-- // END drawer -->
        </div>
        <!-- // END drawer-layout -->

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="compact"
                          :layout-location="{
      'compact': 'compact-analytics.html',
      'mini': 'mini-analytics.html',
      'app': 'analytics.html',
      'boxed': 'boxed-analytics.html',
      'sticky': 'sticky-analytics.html',
      'default': 'fixed-analytics.html'
    }"
                          sidebar-type="light"
                          sidebar-variant="bg-body"></app-settings>
        </div>
        <!--jquery-->
        @include('layouts/adminjs')
           </body>

</html>