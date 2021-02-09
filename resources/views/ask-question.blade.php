<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Ask Question</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="vendor/spinkit.css"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="css/app.css"
              rel="stylesheet">

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

                <!-- Navbar -->

                <div class="navbar navbar-expand pr-0 navbar-light border-bottom-2"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar Toggler -->

                    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- // END Navbar Toggler -->

                    <!-- Navbar Brand -->

                    <a href="{{route('myaccount')}}"
                       class="navbar-brand mr-16pt d-lg-none">

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="images/logo/api-logo.png"
                                     alt="logo"
                                     class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">API</span>
                    </a>

                    <!-- // END Navbar Brand -->

                    <span class="d-none d-md-flex align-items-center mr-16pt">

                        <span class="avatar avatar-sm mr-12pt">

                            <span class="avatar-title rounded navbar-avatar"><i class="material-icons">trending_up</i></span>

                        </span>

                        <small class="flex d-flex flex-column">
                            <strong class="navbar-text-100">Earnings</strong>
                            <span class="navbar-text-50">&dollar;12.3k</span>
                        </small>
                    </span>
                    <span class="d-none d-md-flex align-items-center mr-16pt">

                        <span class="avatar avatar-sm mr-12pt">

                            <span class="avatar-title rounded navbar-avatar"><i class="material-icons">receipt</i></span>

                        </span>

                        <small class="flex d-flex flex-column">
                            <strong class="navbar-text-100">Sales</strong>
                            <span class="navbar-text-50">264</span>
                        </small>
                    </span>

                    <div class="flex"></div>

                    <!-- Switch Layout -->

                    <a href="../Compact_App_Layout/discussions-ask.html"
                       class="navbar-toggler navbar-toggler-custom align-items-center justify-content-center d-none d-lg-flex"
                       data-toggle="tooltip"
                       data-title="Switch to Compact Layout"
                       data-placement="bottom"
                       data-boundary="window">
                        <span class="material-icons">swap_horiz</span>
                    </a>

                    <!-- // END Switch Layout -->

                    <!-- Navbar Menu -->

                    <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

                        <!-- Notifications dropdown -->
                        <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full"
                             data-toggle="tooltip"
                             data-title="Messages"
                             data-placement="bottom"
                             data-boundary="window">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-caret="false">
                                <i class="material-icons icon-24pt">mail_outline</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="images/people/110/woman-5.jpg"
                                                         alt="people"
                                                         class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Michelle</strong>
                                                    <span class="text-black-70">Clients loved the new design.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="images/people/110/woman-5.jpg"
                                                         alt="people"
                                                         class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Michelle</strong>
                                                    <span class="text-black-70">🔥 Superb job..</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->

                        <!-- Notifications dropdown -->
                        <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full"
                             data-toggle="tooltip"
                             data-title="Notifications"
                             data-placement="bottom"
                             data-boundary="window">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-caret="false">
                                <i class="material-icons">notifications_none</i>
                                <span class="badge badge-notifications badge-accent">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>System notifications</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">3 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 hours ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Adrian. D</strong>
                                                    <span class="text-black-70">Wants to join your private group.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">1 day ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your deploy was successful.</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->

                        <div class="nav-item dropdown">
                            <a href="#"
                               class="nav-link d-flex align-items-center dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">

                                <span class="avatar avatar-sm mr-8pt2">

                                    <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                                </span>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item"
                                   href="edit-account.html">Edit Account</a>
                                <a class="dropdown-item"
                                   href="billing.html">Billing</a>
                                <a class="dropdown-item"
                                   href="billing-history.html">Payments</a>
                                <a class="dropdown-item"
                                   href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>

                    <!-- // END Navbar Menu -->

                </div>

                <!-- // END Navbar -->

                <!-- // END Header -->

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

                <div class="navbar navbar-list navbar-light bg-white border-bottom-2 border-bottom navbar-expand-sm"
                     style="white-space: nowrap;">
                    <div class="container page__container">
                        <nav class="nav navbar-nav">
                            <div class="nav-item navbar-list__item">
                                <a href="student-take-course.html"
                                   class="nav-link h-auto"><i class="material-icons icon--left">keyboard_backspace</i> Back to Course</a>
                            </div>
                            <div class="nav-item navbar-list__item">
                                <div class="d-flex align-items-center flex-nowrap">
                                    <div class="mr-16pt">
                                        <a href="student-take-course.html"><img src="images/paths/angular_64x64.png"
                                                 width="40"
                                                 alt="Angular"
                                                 class="rounded"></a>
                                    </div>
                                    <div class="flex">
                                        <a href="student-take-course.html"
                                           class="card-title text-body mb-0">Angular Fundamentals</a>
                                        <p class="lh-1 d-flex align-items-center mb-0">
                                            <span class="text-50 small font-weight-bold mr-8pt">Elijah Murray</span>
                                            <span class="text-50 small">Software Engineer and Developer</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="container page__container">
                    <form action="discussions.html">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="page-section">
                                    <h4>Ask a question</h4>

                                    <div class="card--connect pb-32pt pb-lg-64pt">
                                        <div class="card o-hidden mb-0">
                                            <div class="card-body table--elevated">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-title">
                                                    <div class="form-row align-items-center">
                                                        <label id="label-title"
                                                               for="title"
                                                               class="col-md-3 col-form-label form-label">Question title</label>
                                                        <div class="col-md-9">
                                                            <input id="title"
                                                                   type="text"
                                                                   placeholder="Your question ..."
                                                                   value="Angular HttpClientModule"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header bg-transparent">
                                                <h5 class="text-uppercase mb-0">Similar questions</h5>
                                            </div>

                                            <div class="list-group list-group-flush">

                                                <div class="list-group-item p-3">
                                                    <div class="row align-items-start">
                                                        <div class="col-md-3 mb-8pt mb-md-0">
                                                            <div class="media align-items-center">
                                                                <div class="media-left mr-12pt">
                                                                    <a href=""
                                                                       class="avatar avatar-sm">
                                                                        <!-- <img src="../../LB" alt="avatar" class="avatar-img rounded-circle"> -->
                                                                        <span class="avatar-title rounded-circle">LB</span>
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex flex-column media-body media-middle">
                                                                    <a href=""
                                                                       class="card-title">Laza Bogdan</a>
                                                                    <small class="text-muted">2 days ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-8pt mb-md-0">
                                                            <p class="mb-8pt"><a href="discussion.html"
                                                                   class="text-body"><strong>Using Angular HttpClientModule instead of HttpModule</strong></a></p>

                                                            <a href="discussion.html"
                                                               class="chip chip-outline-secondary">Angular fundamentals</a>

                                                        </div>
                                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                                            <h5 class="m-0">1</h5>
                                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list-group-item p-3">
                                                    <div class="row align-items-start">
                                                        <div class="col-md-3 mb-8pt mb-md-0">
                                                            <div class="media align-items-center">
                                                                <div class="media-left mr-12pt">
                                                                    <a href=""
                                                                       class="avatar avatar-sm">
                                                                        <!-- <img src="../../AC" alt="avatar" class="avatar-img rounded-circle"> -->
                                                                        <span class="avatar-title rounded-circle">AC</span>
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex flex-column media-body media-middle">
                                                                    <a href=""
                                                                       class="card-title">Adam Curtis</a>
                                                                    <small class="text-muted">3 days ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-8pt mb-md-0">
                                                            <p class="mb-0"><a href="discussion.html"
                                                                   class="text-body"><strong>Why am I getting an error when trying to install angular/http@2.4.2</strong></a></p>

                                                        </div>
                                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                                            <h5 class="m-0">1</h5>
                                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <div role="group"
                                                 aria-labelledby="label-question"
                                                 class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-question"
                                                           for="question"
                                                           class="col-md-3 col-form-label form-label">Question details</label>
                                                    <div class="col-md-9">
                                                        <textarea id="question"
                                                                  placeholder="Describe your question in detail ..."
                                                                  rows="4"
                                                                  class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0"
                                                 role="group"
                                                 aria-labelledby="label-topic">
                                                <div class="form-row align-items-center">
                                                    <label id="label-topic"
                                                           for="topic"
                                                           class="col-md-3 col-form-label form-label">Topic</label>
                                                    <div class="col-md-9">
                                                        <select id="topic"
                                                                class="form-control custom-select w-auto">
                                                            <option value="JavaScript">JavaScript</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input id="notify"
                                                       type="checkbox"
                                                       class="custom-control-input"
                                                       checked="">
                                                <label for="notify"
                                                       class="custom-control-label">Notify me on email when someone replies to my question</label>
                                            </div>
                                            <small id="description-notify"
                                                   class="form-text text-muted">If unchecked, you'll still recieve notifications on our website.</small>
                                        </div>
                                        <div class="list-group-item">
                                            <button type="button"
                                                    class="btn btn-accent">Post Question</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 page-nav">
                                <div data-perfect-scrollbar
                                     data-perfect-scrollbar-wheel-propagation="true">
                                    <div class="page-section pt-lg-112pt">
                                        <div class="nav page-nav__menu">
                                            <a href="javascript:void(0)"
                                               class="nav-link active">Before you post</a>
                                        </div>
                                        <div class="page-nav__content">
                                            <p class="text-70">There may be other students who have asked the same question before.</p>
                                            <p class="text-70">You should do a quick search first to make sure your question is unique.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- // END Page Content -->

                <!-- Footer -->

                <div class="bg-white border-top-2 mt-auto">
                    <div class="container page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="images/logo/api-logo.png"
                                 width="30"
                                 alt=""> API
                        </p>
                        <p class="measure-lead-max text-50 small mr-8pt">API is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
                        <p class="mb-8pt d-flex">
                            <a href=""
                               class="text-70 text-underline mr-8pt small">Terms</a>
                            <a href=""
                               class="text-70 text-underline small">Privacy policy</a>
                        </p>
                        <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                    </div>
                </div>

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            <!-- Drawer -->
            <div class="mdk-drawer js-mdk-drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
                         data-perfect-scrollbar>

                        <!-- Sidebar Content -->

                        <div class="d-flex align-items-center navbar-height">
                            <form action="index.html"
                                  class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                                <input type="text"
                                       class="form-control pl-0"
                                       placeholder="Search">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                            </form>
                        </div>

                        <a href="{{route('myaccount')}}"
                           class="sidebar-brand ">
                            <!-- <img class="sidebar-brand-icon" src="images/illustration/student/128/white.svg" alt="Luma"> -->

                            <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                                <span class="avatar-title rounded bg-primary"><img src="images/logo/api-logo.png"
                                         class="img-fluid"
                                         alt="logo" /></span>

                            </span>

                            <span>API</span>
                        </a>

                        <div class="sidebar-heading"><a href="{{route('myaccount')}}">My A c c o u n t</a></div>
                        <ul class="sidebar-menu">

                            <li class="sidebar-menu-item">
                            <!--    <a class="sidebar-menu-button js-sidebar-collapse"
                                   data-toggle="collapse"
                                   href="#student_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                    Student
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="student_menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="index.html">

                                            <span class="sidebar-menu-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="courses.html">

                                            <span class="sidebar-menu-text">Browse Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="paths.html">

                                            <span class="sidebar-menu-text">Browse Paths</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-dashboard.html">

                                            <span class="sidebar-menu-text">Student Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-my-courses.html">

                                            <span class="sidebar-menu-text">My Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-paths.html">

                                            <span class="sidebar-menu-text">My Paths</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path.html">

                                            <span class="sidebar-menu-text">Path Details</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-course.html">

                                            <span class="sidebar-menu-text">Course Preview</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-lesson.html">

                                            <span class="sidebar-menu-text">Lesson Preview</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-course.html">

                                            <span class="sidebar-menu-text">Take Course</span>
                                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-lesson.html">

                                            <span class="sidebar-menu-text">Take Lesson</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-quiz.html">

                                            <span class="sidebar-menu-text">Take Quiz</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-quiz-results.html">

                                            <span class="sidebar-menu-text">My Quizzes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-quiz-result-details.html">

                                            <span class="sidebar-menu-text">Quiz Result</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path-assessment.html">

                                            <span class="sidebar-menu-text">Skill Assessment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path-assessment-result.html">

                                            <span class="sidebar-menu-text">Skill Result</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button js-sidebar-collapse"
                                   data-toggle="collapse"
                                   href="#instructor_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                    Instructor
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="instructor_menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-dashboard.html">

                                            <span class="sidebar-menu-text">Instructor Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-courses.html">

                                            <span class="sidebar-menu-text">Manage Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-quizzes.html">

                                            <span class="sidebar-menu-text">Manage Quizzes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-earnings.html">

                                            <span class="sidebar-menu-text">Earnings</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-statement.html">

                                            <span class="sidebar-menu-text">Statement</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-edit-course.html">

                                            <span class="sidebar-menu-text">Edit Course</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-edit-quiz.html">

                                            <span class="sidebar-menu-text">Edit Quiz</span>
                                        </a>
                                    </li>

                                </ul>
                            </li> -->

                            <!-- <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button js-sidebar-collapse"
                                   data-toggle="collapse"
                                   href="#enterprise_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                    Enterprise
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="enterprise_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="erp-dashboard.html">
                                            <span class="sidebar-menu-text">ERP Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="crm-dashboard.html">
                                            <span class="sidebar-menu-text">CRM Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="hr-dashboard.html">
                                            <span class="sidebar-menu-text">HR Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="employees.html">
                                            <span class="sidebar-menu-text">Employees</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="staff.html">
                                            <span class="sidebar-menu-text">Staff</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="leaves.html">
                                            <span class="sidebar-menu-text">Leaves</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button disabled"
                                           href="departments.html">
                                            <span class="sidebar-menu-text">Departments</span>
                                        </a>
                                    </li> -->
                                    <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                                <!-- </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#productivity_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                    Productivity
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="productivity_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="projects.html">
                                            <span class="sidebar-menu-text">Projects</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="tasks-board.html">
                                            <span class="sidebar-menu-text">Tasks Board</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="tasks-list.html">
                                            <span class="sidebar-menu-text">Tasks List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button disabled"
                                           href="kanban.html">
                                            <span class="sidebar-menu-text">Kanban</span>
                                        </a>
                                    </li>-->
                                    <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                             <!--   </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#ecommerce_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                    eCommerce
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="ecommerce_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ecommerce.html">
                                            <span class="sidebar-menu-text">Shop Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button disabled"
                                           href="edit-product.html">
                                            <span class="sidebar-menu-text">Edit Product</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#messaging_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                                    Messaging
                                    <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span>
                                    <span class="sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="messaging_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="messages.html">
                                            <span class="sidebar-menu-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="email.html">
                                            <span class="sidebar-menu-text">Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#cms_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                    CMS
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="cms_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="cms-dashboard.html">
                                            <span class="sidebar-menu-text">CMS Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="posts.html">
                                            <span class="sidebar-menu-text">Posts</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="sidebar-menu-item active open">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#account_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                    Account
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse show sm-indent"
                                    id="account_menu">
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="{{route('pricing')}}">
                                            <span class="sidebar-menu-text">Pricing</span>
                                        </a>
                                    </li>
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="login.html">
                                            <span class="sidebar-menu-text">Login</span>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="signup.html">
                                            <span class="sidebar-menu-text">Signup</span>
                                        </a>
                                    </li> --}}
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('signup-payment')}}">
                                            <span class="sidebar-menu-text">Payment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('reset-password')}}">
                                            <span class="sidebar-menu-text">Reset Password</span>
                                        </a>
                                    </li>
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="change-password.html">
                                            <span class="sidebar-menu-text">Change Password</span>
                                        </a>
                                    </li> --}}
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('edit-account')}}">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('profile')}}">
                                            <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                        </a>
                                    </li>
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-notifications.html">
                                            <span class="sidebar-menu-text">Email Notifications</span>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-password.html">
                                            <span class="sidebar-menu-text">Account Password</span>
                                        </a>
                                    </li> --}}
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button js-sidebar-collapse"
                                           data-toggle="collapse"
                                           href="#instructor_menu">
                                            <span class="sidebar-menu-text">Subscription</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="instructor_menu">
        
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="{{route('pricing')}}">
                                                    <span class="sidebar-menu-text">Package Selection</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="">
        
                                                    <span class="sidebar-menu-text">Payment</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="instructor-dashboard.html">
        
                                                    <span class="sidebar-menu-text">Coupon</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="instructor-dashboard.html">
        
                                                    <span class="sidebar-menu-text">Discount</span>
                                                </a>
                                            </li>
                                        </ul>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('billing-upgrade')}}">
                                            <span class="sidebar-menu-text">Upgrade Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('billing-payment')}}">
                                            <span class="sidebar-menu-text">Payment Information</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('billing-history')}}">
                                            <span class="sidebar-menu-text">Payment History</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('billing-invoice')}}">
                                            <span class="sidebar-menu-text">Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#community_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                    Helpdesk
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="community_menu">
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="teachers.html">

                                            <span class="sidebar-menu-text">Browse Teachers</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-profile.html">

                                            <span class="sidebar-menu-text">Student Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="teacher-profile.html">

                                            <span class="sidebar-menu-text">Teacher Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="blog.html">

                                            <span class="sidebar-menu-text">Blog</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="blog-post.html">

                                            <span class="sidebar-menu-text">Blog Post</span>
                                        </a>
                                    </li> --}}
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('faq')}}">
                                            <span class="sidebar-menu-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('helpcenter')}}">
                                              
                                            <span class="sidebar-menu-text">Help Center</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('discussion')}}">
                                            <span class="sidebar-menu-text">Discussions</span>
                                        </a>
                                    </li>
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="discussion.html">
                                            <span class="sidebar-menu-text">Discussion Details</span>
                                        </a>
                                    </li> --}}
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{route('ask-question')}}">
                                            <span class="sidebar-menu-text">Ask Question</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>

                        <!-- <div class="sidebar-heading">UI</div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#components_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                    Components
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="components_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-buttons.html">
                                            <span class="sidebar-menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-avatars.html">
                                            <span class="sidebar-menu-text">Avatars</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-forms.html">
                                            <span class="sidebar-menu-text">Forms</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-loaders.html">
                                            <span class="sidebar-menu-text">Loaders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-tables.html">
                                            <span class="sidebar-menu-text">Tables</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-cards.html">
                                            <span class="sidebar-menu-text">Cards</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-icons.html">
                                            <span class="sidebar-menu-text">Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-tabs.html">
                                            <span class="sidebar-menu-text">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-alerts.html">
                                            <span class="sidebar-menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-badges.html">
                                            <span class="sidebar-menu-text">Badges</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-progress.html">
                                            <span class="sidebar-menu-text">Progress</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-pagination.html">
                                            <span class="sidebar-menu-text">Pagination</span>
                                        </a>
                                    </li> -->
                                    <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->
                                    <!-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button disabled"
                                           href="">
                                            <span class="sidebar-menu-text">Disabled</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#plugins_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                                    Plugins
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="plugins_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-charts.html">
                                            <span class="sidebar-menu-text">Charts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-flatpickr.html">
                                            <span class="sidebar-menu-text">Flatpickr</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-daterangepicker.html">
                                            <span class="sidebar-menu-text">Date Range Picker</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-dragula.html">
                                            <span class="sidebar-menu-text">Dragula</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-dropzone.html">
                                            <span class="sidebar-menu-text">Dropzone</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-range-sliders.html">
                                            <span class="sidebar-menu-text">Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-quill.html">
                                            <span class="sidebar-menu-text">Quill</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-select2.html">
                                            <span class="sidebar-menu-text">Select2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-nestable.html">
                                            <span class="sidebar-menu-text">Nestable</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-fancytree.html">
                                            <span class="sidebar-menu-text">Fancy Tree</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-maps-vector.html">
                                            <span class="sidebar-menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-sweet-alert.html">
                                            <span class="sidebar-menu-text">Sweet Alert</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ui-plugin-toastr.html">
                                            <span class="sidebar-menu-text">Toastr</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button disabled"
                                           href="">
                                            <span class="sidebar-menu-text">Disabled</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#layouts_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                    Layouts
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="layouts_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Compact_App_Layout/pricing.html">
                                            <span class="sidebar-menu-text">Compact</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_App_Layout/pricing.html">
                                            <span class="sidebar-menu-text">Mini</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_Secondary_Layout/pricing.html">
                                            <span class="sidebar-menu-text">Mini + Secondary</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="../App_Layout/pricing.html">
                                            <span class="sidebar-menu-text">App</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Boxed_App_Layout/pricing.html">
                                            <span class="sidebar-menu-text">Boxed</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Sticky_App_Layout/pricing.html">
                                            <span class="sidebar-menu-text">Sticky</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Fixed_Layout/pricing.html">
                                            <span class="sidebar-menu-text">Fixed</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>

                        <!-- // END Sidebar Content -->

                    </div>
                </div>
            </div>


            <!-- // END Drawer -->

        </div>

        <!-- // END Drawer Layout -->

        <!-- jQuery -->
        <script src="vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendor/popper.min.js"></script>
        <script src="vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="js/app.js"></script>

        <!-- Preloader -->
        <script src="js/preloader.js"></script>

    </body>

</html>