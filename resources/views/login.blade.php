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

        <!-- <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content"> -->

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
                        <!-- <img class="navbar-brand-icon" src="images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="images/illustration/student/128/white.svg"
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
                               class="nav-link">Packages & Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{route('contact')}}"
                               class="nav-link"
                               >Contact Us</a>
                            
                        </li>
                        
                    </ul>
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

                <div class="pt-32pt pt-sm-64pt pb-32pt">
                    <div class="container page__container">
                        <form action="{{route('myaccount')}}"
                              class="col-md-5 p-0 mx-auto">
                              @csrf
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Email:</label>
                                <input id="email"
                                       type="text"
                                       class="form-control"
                                       name="email"
                                       placeholder="Your email address ...">
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Password:</label>
                                <input id="password"
                                       type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Enter your Password....">
                                <p class="text-right"><a href="{{route('reset-password-login')}}"
                                       class="small">Forgot your password?</a></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                

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

        <!-- jQuery -->
        @include('layouts/_js')

    </body>

</html>