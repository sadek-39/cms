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
                               class="nav-link ">Contact Us</a>
                            
                        </li>
                        
                    </ul>

                    <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="{{route('login')}}"
                               class="nav-link"
                               data-toggle="tooltip"
                               data-title="Login"
                               data-placement="bottom"
                               data-boundary="window"><i lock_open class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{route('signup')}}"
                               class="btn btn-outline-dark">Get Started</a>
                        </li>
                    </ul>
                </div>

                <!-- // END Header -->

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

                <div class="py-32pt navbar-submenu">
                    <div class="container page__container">
                        <div class="progression-bar progression-bar--active-accent">
                            <a href="pricing.html"
                               class="progression-bar__item progression-bar__item--complete">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon">done</i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Pricing</span>
                                </span>
                            </a>
                            <a href="signup.html"
                               class="progression-bar__item progression-bar__item--complete progression-bar__item--active">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon"></i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Account details</span>
                                </span>
                            </a>
                            <a href="signup-payment.html"
                               class="progression-bar__item">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon"></i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Payment details</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="page-section container page__container">
                    <div class="col-lg-10 p-0 mx-auto">
                        <div class="row">
                            <div class="col-md-6 mb-24pt mb-md-0">
                                <form action="{{route('create')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label"
                                               for="name">Your first Name:</label>
                                        <input id="name"
                                                name="first_name"
                                               type="text"
                                               class="form-control"
                                               placeholder="Your first name ..." required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"
                                               for="name">Your last Name:</label>
                                        <input id="name" name="last_name"
                                               type="text"
                                               class="form-control"
                                               placeholder="Your last name ..." required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"
                                               for="email">Your email:</label>
                                        <input id="email"
                                               type="email"
                                               name="email"
                                               class="form-control"
                                               placeholder="Your email address ..." required>
                                    </div>
                                    <div class="form-group mb-24pt">
                                        <label class="form-label"
                                               for="password">Password:</label>
                                        <input id="password"
                                               type="password"
                                               name="password"
                                               class="form-control"
                                               placeholder="Your password ..." required>
                                    </div>
                                    <button class="btn btn-primary">Create account</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                {{-- <div class="card mb-0">
                                    
                                </div> --}}
                            </div>
                        </div>
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