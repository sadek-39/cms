<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
       @include('layouts/_head')
       @include('layouts/_css')
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

        {{-- <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content"> --}}

                <!-- Header -->

                <div class="navbar navbar-expand navbar-light border-bottom-2"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="index.html"
                       class="navbar-brand mr-16pt d-lg-none">
                        <!-- <img class="navbar-brand-icon" src="../../public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="/images/illustration/student/128/white.svg"
                                     alt="logo"
                                     class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">API</span>
                    </a>

                    <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                        <li class="nav-item">
                            <a href="{{route('index')}}"
                               class="nav-link">Home</a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a href="{{route('indexpricing')}}"
                               class="nav-link">Pricing</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="{{route('login')}}"
                               class="nav-link"
                               data-toggle="tooltip"
                               data-title="Login"
                               data-placement="bottom"
                               data-boundary="window"><i class="material-icons">lock_open</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('signup')}}"
                               class="btn btn-outline-dark">Get Started</a>
                        </li>
                    </ul>
                </div>

                <!-- // END Header -->

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

                <div class="page-section pb-0">
                    <div class="container page__container d-flex flex-column flex-sm-row align-items-sm-center">
                        <div class="flex">
                            <h1 class="h2 mb-0">Reset Password</h1>
                            <p class="text-breadcrumb">Account Management</p>
                        </div>
                        <p class="d-sm-none"></p>
                        <a href="{{route('contact')}}"
                           class="btn btn-outline-secondary flex-column">
                            Need Help?
                            <span class="btn__secondary-text">Contact us</span>
                        </a>
                    </div>
                </div>

                <div class="page-section">
                    <div class="container page__container">
                        <div class="page-separator">
                            <div class="page-separator__text">Reset Password</div>
                        </div>
                        <div class="col-sm-6 p-0">
                            <div class="alert alert-soft-warning">
                                <div class="d-flex flex-wrap">
                                    <div class="mr-8pt">
                                        <i class="material-icons">check_circle</i>
                                    </div>
                                    <div class="flex"
                                         style="min-width: 180px">
                                        <small class="text-100">
                                            An email with password reset instructions has been sent to your email address.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <form action="change-password.html">
                                <div class="form-group">
                                    <label class="form-label">Email:</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder="Your email address ...">
                                    <small class="form-text text-muted">We will email you with info on how to reset your password.</small>
                                </div>
                                <button class="btn btn-primary">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- // END Page Content -->

                <!-- Footer -->

               @include('layouts/_footer')
                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->


            <!-- // END Drawer -->

        </div>

        <!-- // END Drawer Layout -->

        <!-- jQuery -->
       @include('layouts/_js')

    </body>

</html>