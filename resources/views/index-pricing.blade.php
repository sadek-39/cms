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
                        <img class="navbar-brand-icon" src="images/logo/white-100@2x.png" width="30" alt="">

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
                       
                        <li class="nav-item dropdown">
                            <a href="{{route('contact')}}"
                               class="nav-link"
                               
                               >Contact Us</a>
                           
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

                <div class="page-section bg-primary"
                     data-block-id="pricing-cards">
                    <div class="container page__container">
                        <!-- <div class="hero text-center pb-64pt">
      <h1 class="text-white">Upgrade</h1>
      <p class="text-white-50 lead measure-hero-lead mx-auto">Change your future today with over 1.000 professional courses from the top industry leading teachers and professionals.</p>
    </div> -->
                        <div class="row card-group-row mb-16pt mb-lg-40pt">
                            <div class="col-lg-4 col-sm-6 card-group-row__col">

                                <div class="card card-group-row__card text-center o-hidden card--raised border-0">

                                    <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">Popular</span>

                                    <div class="card-body d-flex flex-column">
                                        <div class="flex-grow mb-16pt">
                                            <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <h4 class="mb-8pt">Starter</h4>
                                            <p class="text-70 mb-0">For Garments Product Development.</p>
                                        </div>
                                        <p class="d-flex justify-content-center align-items-center m-0">
                                            <span class="h4 m-0 font-weight-normal">Taka</span>
                                            <span class="h1 m-0 font-weight-normal">2000</span>
                                            <span class="h4 m-0 font-weight-normal">/ single order</span>
                                        </p>
                                        <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('signup')}}"
                                           class="btn btn-accent">Get started</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-sm-6 card-group-row__col">

                                <div class="card card-group-row__card text-center o-hidden border-0">

                                    <div class="card-body d-flex flex-column">
                                        <div class="flex-grow mb-16pt">
                                            <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                                                <i class="material-icons">group</i>
                                            </span>
                                            <h4 class="mb-8pt">Professionals</h4>
                                            <p class="text-70 mb-0">For Garments Product Development.</p>
                                        </div>
                                        <p class="d-flex justify-content-center align-items-center m-0">
                                            <span class="h4 m-0 font-weight-normal">Taka</span>
                                            <span class="h1 m-0 font-weight-normal">5000</span>
                                            <span class="h4 m-0 font-weight-normal">/ 3 orders</span>
                                        </p>
                                        <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('signup')}}"
                                           class="btn btn-outline-secondary">Get started</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-sm-6 card-group-row__col">

                                <div class="card card-group-row__card text-center o-hidden border-0">

                                    <div class="card-body d-flex flex-column">
                                        <div class="flex-grow mb-16pt">
                                            <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                                                <i class="material-icons">business_center</i>
                                            </span>
                                            <h4 class="mb-8pt">Enterprise</h4>
                                            <p class="text-70 mb-0">For Garments Product Development.</p>
                                        </div>
                                        <p class="d-flex justify-content-center align-items-center m-0">
                                            <span class="h4 m-0 font-weight-normal">Taka</span>
                                            <span class="h1 m-0 font-weight-normal">8000</span>
                                            <span class="h4 m-0 font-weight-normal">/ 5 orders</span>
                                        </p>
                                        <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('signup')}}"
                                           class="btn btn-outline-secondary">Get started</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="page-headline page-headline--white page-headline--title text-center">
                            <h2 class="text-white">All plans include</h2>
                        </div>

                        <div class="col-lg-8 mx-auto">
                            <div class="row">
                                <div class="col-sm-6 mb-24pt mb-sm-0">
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">24h Access to PRO Courses</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Join 2000+ Community Members</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Access to New Courses Weekly</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Support from our Tutors</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Assets Included per Course</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">24h Access to PRO Courses</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Join 2000+ Community Members</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Access to New Courses Weekly</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-8pt">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Support from our Tutors</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="text-white-20 material-icons mr-8pt">check</span>
                                            <span class="text-white-70">Assets Included per Course</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="page-section border-bottom-2"
                     data-block-id="feedback-carousel">
                    <div class="container page__container">
                        <div class="page-headline text-center">
                            <h2>Feedback</h2>
                            <p class="lead measure-lead mx-auto text-70">What other students turned professionals have to say about us after learning with us and reaching their goals.</p>
                        </div>

                        <div class="position-relative carousel-card p-0 mx-auto">
                            <div class="row d-block js-mdk-carousel"
                                 id="carousel-feedback">
                                <a class="carousel-control-next js-mdk-carousel-control mt-n24pt"
                                   href="#carousel-feedback"
                                   role="button"
                                   data-slide="next">
                                    <span class="carousel-control-icon material-icons"
                                          aria-hidden="true">keyboard_arrow_right</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <div class="mdk-carousel__content">

                                    <div class="col-12 col-md-6">

                                        <div class="card card-feedback card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                            </blockquote>
                                        </div>
                                        <div class="media ml-12pt">
                                            <div class="media-left mr-12pt">
                                                <a href="student-profile.html"
                                                   class="avatar avatar-sm">
                                                    <!-- <img src="../../public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">UK</span>
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="student-profile.html"
                                                   class="card-title">Umberto Kass</a>
                                                <div class="rating mt-4pt">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-6">

                                        <div class="card card-feedback card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                            </blockquote>
                                        </div>
                                        <div class="media ml-12pt">
                                            <div class="media-left mr-12pt">
                                                <a href="student-profile.html"
                                                   class="avatar avatar-sm">
                                                    <!-- <img src="../../public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">UK</span>
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="student-profile.html"
                                                   class="card-title">Umberto Kass</a>
                                                <div class="rating mt-4pt">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-6">

                                        <div class="card card-feedback card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                            </blockquote>
                                        </div>
                                        <div class="media ml-12pt">
                                            <div class="media-left mr-12pt">
                                                <a href="student-profile.html"
                                                   class="avatar avatar-sm">
                                                    <!-- <img src="../../public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">UK</span>
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="student-profile.html"
                                                   class="card-title">Umberto Kass</a>
                                                <div class="rating mt-4pt">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="border-top-1 page-section"
                     data-block-id="faq">
                    <div class="container page__container">
                        <div class="page-headline text-center">
                            <h2>FAQ</h2>
                            <p class="lead measure-lead mx-auto text-70">Frequently Asked Questions</p>
                        </div>
                        <div class="row card-group-row">
                            <div class="col-md-6 card-group-row__col">

                                <div class="card card--elevated card-group-row__card">
                                    <div class="card-body d-flex">
                                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                            <i class="material-icons">question_answer</i>
                                        </span>
                                        <div class="flex">
                                            <a class="card-title mb-8pt"
                                               href="">Do you offer a free trial?</a>
                                            <p class="text-70 mb-0">We offer everyone a 7 day free trial! You can take advantage of it by visiting our sign-up page! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, ab!</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                                        <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 card-group-row__col">

                                <div class="card card--elevated card-group-row__card">
                                    <div class="card-body d-flex">
                                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                            <i class="material-icons">question_answer</i>
                                        </span>
                                        <div class="flex">
                                            <a class="card-title mb-8pt"
                                               href="">Can I gift a subscription to someone?</a>
                                            <p class="text-70 mb-0">Yes! We do offer certificates. Please email us for more information. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ad!</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                                        <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 card-group-row__col">

                                <div class="card card--elevated card-group-row__card">
                                    <div class="card-body d-flex">
                                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                            <i class="material-icons">question_answer</i>
                                        </span>
                                        <div class="flex">
                                            <a class="card-title mb-8pt"
                                               href="">I have a great idea for an application or website, but need help on where to begin. Can you guys help me?</a>
                                            <p class="text-70 mb-0">We advise posting personal requests in our Community Forum Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                                        <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 card-group-row__col">

                                <div class="card card--elevated card-group-row__card">
                                    <div class="card-body d-flex">
                                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                            <i class="material-icons">question_answer</i>
                                        </span>
                                        <div class="flex">
                                            <a class="card-title mb-8pt"
                                               href="">I found a bug. Where can I report that?</a>
                                            <p class="text-70 mb-0">In the unlikely situation you stumble across a bug, go ahead and shoot us an email. Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                                        <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- // END Page Content -->

                <!-- Footer -->

                @include('layouts/_footer')

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

           
        </div>

        <!-- // END Drawer Layout -->

        <!-- jQuery -->
       @include('layouts/_js')
    </body>

</html>