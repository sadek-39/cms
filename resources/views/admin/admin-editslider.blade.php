
<html lang="en" dir="ltr"><head>
        
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
    <img class="navbar-brand-icon mr-0 mr-lg-8pt" src="images/logo/api-logo.png" width="32" alt="">
    <span class="d-none d-lg-block">API</span>
</a>

<!-- <button class="btn navbar-btn mr-16pt ml-md-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->

<form class="search-form navbar-search d-none d-md-flex mr-16pt" action="compact-index.html">
    <button class="btn" type="submit"><i class="material-icons">search</i></button>
    <input type="text" class="form-control" placeholder="Search ...">
</form>

<div class="flex"></div>

<div class="nav navbar-nav flex-nowrap d-none d-lg-flex mr-16pt" style="white-space: nowrap;">
    <div class="nav-item dropdown d-none d-sm-flex">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">EN</a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header"><strong>Select language</strong></div>
            <a class="dropdown-item active" href="">English</a>
            <a class="dropdown-item" href="">French</a>
            <a class="dropdown-item" href="">Romanian</a>
            <a class="dropdown-item" href="">Spanish</a>
        </div>
    </div>
</div>

<div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
    <div class="nav-item dropdown d-none d-sm-flex">
        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
            <img width="32" height="32" class="rounded-circle mr-8pt" src="images/people/50/guy-3.jpg" alt="account">
            <span class="flex d-flex flex-column mr-8pt">
                <span class="navbar-text-100">Laza Bogdan</span>
                <small class="navbar-text-50">Administrator</small>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header"><strong>Account</strong></div>
            <a class="dropdown-item" href="compact-edit-account.html">Edit Account</a>
            <a class="dropdown-item" href="compact-billing.html">Billing</a>
            <a class="dropdown-item" href="compact-billing-history.html">Payments</a>
            <a class="dropdown-item" href="compact-login.html">Logout</a>
        </div>
    </div>

    <!-- Notifications dropdown -->
    <div class="nav-item ml-16pt dropdown dropdown-notifications">
        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll="" data-caret="false">
            <i class="material-icons">notifications</i>
            <span class="badge badge-notifications badge-accent">2</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <div data-perfect-scrollbar="" class="position-relative">
                <div class="dropdown-header"><strong>System notifications</strong></div>
                <div class="list-group list-group-flush mb-0">

                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
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

                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
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

                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
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

    <!-- Notifications dropdown -->
    <div class="nav-item ml-16pt dropdown dropdown-notifications">
        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll="" data-caret="false">
            <i class="material-icons icon-24pt">mail_outline</i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <div data-perfect-scrollbar="" class="position-relative">
                <div class="dropdown-header"><strong>Messages</strong></div>
                <div class="list-group list-group-flush mb-0">

                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                        <span class="d-flex align-items-center mb-1">
                            <small class="text-black-50">5 minutes ago</small>

                            <span class="ml-auto unread-indicator bg-accent"></span>

                        </span>
                        <span class="d-flex">
                            <span class="avatar avatar-xs mr-2">
                                <img src="images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                            </span>
                            <span class="flex d-flex flex-column">
                                <strong class="text-black-100">Michelle</strong>
                                <span class="text-black-70">Clients loved the new design.</span>
                            </span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                        <span class="d-flex align-items-center mb-1">
                            <small class="text-black-50">5 minutes ago</small>

                        </span>
                        <span class="d-flex">
                            <span class="avatar avatar-xs mr-2">
                                <img src="images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
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
</div>

<div class="dropdown border-left-2 navbar-border">
    <button class="navbar-toggler navbar-toggler-custom d-block" type="button" data-toggle="dropdown" data-caret="false">
        <span class="material-icons">business_center</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header"><strong>Select company</strong></div>
        <a href="" class="dropdown-item active d-flex align-items-center">

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
        <a href="" class="dropdown-item d-flex align-items-center">

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
</div>

</div>
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

                        

                    </div>

                    <div class="row" role="tablist">
                        <div class="col-auto d-flex flex-column">
                            <h6 class="m-0">$12.3k</h6>
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
                            <a href="" class="btn btn-accent">New Report</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container page__container">
                
            </div>
            <div class="js-fix-footer footer border-top-2">
<div class="container page__container page-section d-flex flex-column">
    <p class="text-70 brand mb-24pt">
        <img class="brand-icon" src="images/logo/api-logo.png" width="30" alt="Huma"> API
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
                        <a href="#" class="nav-link mr-8pt"><img src="images/icon/footer/facebook-square@2x.png" width="24" height="24" alt="Facebook"></a>
                        <a href="#" class="nav-link mr-8pt"><img src="images/icon/footer/twitter-square@2x.png" width="24" height="24" alt="Twitter"></a>
                        <a href="#" class="nav-link mr-8pt"><img src="images/icon/footer/vimeo-square@2x.png" width="24" height="24" alt="Vimeo"></a>
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
           <a class="sidebar-menu-button" href="">
               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
               <span class="">Dashboard</span>
           </a>
       </li>
       <li class="sidebar-menu-item">
           <a class="sidebar-menu-button" href="http://127.0.0.1:8000/adminsettings">
              <i class="fas fa-tools"></i>
               <span class="">Settings</span>
           </a>
       </li>
       <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="http://127.0.0.1:8000/adminheaderform">
           <i class="fas fa-heading"></i>
            <span class="">Header</span>
        </a>
    </li>
    <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="http://127.0.0.1:8000/adminfooterform">
           <i class="fas fa-shoe-prints"></i>
            <span class="">Footer</span>
        </a>
    </li>
    <li class="sidebar-menu-item">
           <a class="sidebar-menu-button" href="http://127.0.0.1:8000/adminslider">
              <i class="fas fa-sliders-h"></i>
               <span class="">Slider</span>
           </a>
       </li>
       
       
       
   </ul>
</div>

<div class="sidebar sidebar-light sidebar-left flex sidebar-secondary sidebar-p-t" data-perfect-scrollbar="">
   <div class="tab-content">

       

       <div class="tab-pane fade active show" id="sm_dashboards">
           <div class="sidebar-heading">Dashboards</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item active open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dashboard</span>
                       Dashboard
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse show sm-indent" id="dashboards_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-index.html">
                               <span class="sidebar-menu-text">Analytics Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item active">
                           <a class="sidebar-menu-button" href="compact-analytics.html">
                               <span class="sidebar-menu-text">Analytics 2 Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-projects.html">
                               <span class="sidebar-menu-text">Projects Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-tasks-board.html">
                               <span class="sidebar-menu-text">Tasks Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-staff.html">
                               <span class="sidebar-menu-text">Staff Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ecommerce.html">
                               <span class="sidebar-menu-text">Shop Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-erp-dashboard.html">
                               <span class="sidebar-menu-text">ERP Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-crm-dashboard.html">
                               <span class="sidebar-menu-text">CRM Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-hr-dashboard.html">
                               <span class="sidebar-menu-text">HR Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-cms-dashboard.html">
                               <span class="sidebar-menu-text">CMS Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button disabled" href="compact-ui-card-metrics.html">
                               <span class="sidebar-menu-text">Card Metrics</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane" id="sm_enterprise">
           <div class="sidebar-heading">Enterprise</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                       Enterprise
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-erp-dashboard.html">
                               <span class="sidebar-menu-text">ERP Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-crm-dashboard.html">
                               <span class="sidebar-menu-text">CRM Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-hr-dashboard.html">
                               <span class="sidebar-menu-text">HR Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-employees.html">
                               <span class="sidebar-menu-text">Employees</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-staff.html">
                               <span class="sidebar-menu-text">Staff</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-leaves.html">
                               <span class="sidebar-menu-text">Leaves</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button disabled" href="compact-departments.html">
                               <span class="sidebar-menu-text">Departments</span>
                           </a>
                       </li>
                       <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-documents.html">
<span class="sidebar-menu-text">Documents</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-attendance.html">
<span class="sidebar-menu-text">Attendance</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-recruitment.html">
<span class="sidebar-menu-text">Recruitment</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-payroll.html">
<span class="sidebar-menu-text">Payroll</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-training.html">
<span class="sidebar-menu-text">Training</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-employee-profile.html">
<span class="sidebar-menu-text">Employee Profile</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-accounting.html">
<span class="sidebar-menu-text">Accounting</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-inventory.html">
<span class="sidebar-menu-text">Inventory</span>
</a>
</li> -->
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_productivity">
           <div class="sidebar-heading">Productivity</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#productivity_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                       Productivity
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-projects.html">
                               <span class="sidebar-menu-text">Projects</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-tasks-board.html">
                               <span class="sidebar-menu-text">Tasks Board</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-tasks-list.html">
                               <span class="sidebar-menu-text">Tasks List</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button disabled" href="compact-kanban.html">
                               <span class="sidebar-menu-text">Kanban</span>
                           </a>
                       </li>
                       <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-task-details.html">
<span class="sidebar-menu-text">Task Details</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-team-members.html">
<span class="sidebar-menu-text">Team Members</span>
</a>
</li> -->
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_ecommerce">
           <div class="sidebar-heading">eCommerce</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#ecommerce_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                       eCommerce
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="ecommerce_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ecommerce.html">
                               <span class="sidebar-menu-text">Shop Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button disabled" href="compact-edit-product.html">
                               <span class="sidebar-menu-text">Edit Product</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_messaging">
           <div class="sidebar-heading">Messaging</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#messaging_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                       Messaging
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="messaging_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-messages.html">
                               <span class="sidebar-menu-text">Messages</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-email.html">
                               <span class="sidebar-menu-text">Email</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_marketplace">
           <div class="sidebar-heading">Marketplace</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#marketplace_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assessment</span>
                       Marketplace
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="marketplace_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button disabled" href="compact-digital-product.html">
                               <span class="sidebar-menu-text">Digital Product</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_education">
           <div class="sidebar-heading">Education</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#education_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                       Education
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="education_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" data-toggle="collapse" href="#student_menu">
                               <span class="sidebar-menu-text">Student</span>
                               <span class="ml-auto sidebar-menu-toggle-icon"></span>
                           </a>
                           <ul class="sidebar-submenu collapse sm-indent" id="student_menu">
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-dashboard.html">
                                       <span class="sidebar-menu-text">Student Dashboard</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-profile.html">
                                       <span class="sidebar-menu-text">Student Profile</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-my-courses.html">
                                       <span class="sidebar-menu-text">My Courses</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-quiz-results.html">
                                       <span class="sidebar-menu-text">My Quizzes</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-take-course.html">
                                       <span class="sidebar-menu-text">Take Course</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-take-lesson.html">
                                       <span class="sidebar-menu-text">Take Lesson</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-take-quiz.html">
                                       <span class="sidebar-menu-text">Take Quiz</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-quiz-result-details.html">
                                       <span class="sidebar-menu-text">Quiz Result</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-path-assessment.html">
                                       <span class="sidebar-menu-text">Skill Assessment</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-student-path-assessment-result.html">
                                       <span class="sidebar-menu-text">Skill Result</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" data-toggle="collapse" href="#instructor_menu">
                               <span class="sidebar-menu-text">Instructor</span>
                               <span class="ml-auto sidebar-menu-toggle-icon"></span>
                           </a>
                           <ul class="sidebar-submenu collapse sm-indent" id="instructor_menu">
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-dashboard.html">
                                       <span class="sidebar-menu-text">Instructor Dashboard</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-profile.html">
                                       <span class="sidebar-menu-text">Instructor Profile</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-courses.html">
                                       <span class="sidebar-menu-text">Manage Courses</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-quizzes.html">
                                       <span class="sidebar-menu-text">Manage Quizzes</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-edit-course.html">
                                       <span class="sidebar-menu-text">Edit Course</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-edit-quiz.html">
                                       <span class="sidebar-menu-text">Edit Quiz</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-earnings.html">
                                       <span class="sidebar-menu-text">Earnings</span>
                                   </a>
                               </li>
                               <li class="sidebar-menu-item">
                                   <a class="sidebar-menu-button disabled" href="compact-instructor-statement.html">
                                       <span class="sidebar-menu-text">Statement</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_cms">
           <div class="sidebar-heading">CMS</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                       CMS
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-cms-dashboard.html">
                               <span class="sidebar-menu-text">CMS Dashboard</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-posts.html">
                               <span class="sidebar-menu-text">Posts</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_account">
           <div class="sidebar-heading">Account</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                       Account
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-pricing.html">
                               <span class="sidebar-menu-text">Pricing</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-login.html">
                               <span class="sidebar-menu-text">Login</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-signup.html">
                               <span class="sidebar-menu-text">Signup</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-signup-payment.html">
                               <span class="sidebar-menu-text">Payment</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-reset-password.html">
                               <span class="sidebar-menu-text">Reset Password</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-change-password.html">
                               <span class="sidebar-menu-text">Change Password</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-edit-account.html">
                               <span class="sidebar-menu-text">Edit Account</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-edit-account-profile.html">
                               <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-edit-account-notifications.html">
                               <span class="sidebar-menu-text">Email Notifications</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-edit-account-password.html">
                               <span class="sidebar-menu-text">Account Password</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-billing.html">
                               <span class="sidebar-menu-text">Subscription</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-billing-upgrade.html">
                               <span class="sidebar-menu-text">Upgrade Account</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-billing-payment.html">
                               <span class="sidebar-menu-text">Payment Information</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-billing-history.html">
                               <span class="sidebar-menu-text">Payment History</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-billing-invoice.html">
                               <span class="sidebar-menu-text">Invoice</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane " id="sm_community">
           <div class="sidebar-heading">Community</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#community_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                       Community
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="community_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-faq.html">
                               <span class="sidebar-menu-text">FAQ</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-discussions.html">
                               <span class="sidebar-menu-text">Discussions</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-discussion.html">
                               <span class="sidebar-menu-text">Discussion Details</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-discussions-ask.html">
                               <span class="sidebar-menu-text">Ask Question</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane" id="sm_components">
           <div class="sidebar-heading">UI Components</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                       Components
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-buttons.html">
                               <span class="sidebar-menu-text">Buttons</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-avatars.html">
                               <span class="sidebar-menu-text">Avatars</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-forms.html">
                               <span class="sidebar-menu-text">Forms</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-loaders.html">
                               <span class="sidebar-menu-text">Loaders</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-tables.html">
                               <span class="sidebar-menu-text">Tables</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-cards.html">
                               <span class="sidebar-menu-text">Cards</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-icons.html">
                               <span class="sidebar-menu-text">Icons</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-tabs.html">
                               <span class="sidebar-menu-text">Tabs</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-alerts.html">
                               <span class="sidebar-menu-text">Alerts</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-badges.html">
                               <span class="sidebar-menu-text">Badges</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-progress.html">
                               <span class="sidebar-menu-text">Progress</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-pagination.html">
                               <span class="sidebar-menu-text">Pagination</span>
                           </a>
                       </li>
                       <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-typography.html">
<span class="sidebar-menu-text">Typography</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-colors.html">
<span class="sidebar-menu-text">Colors</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-breadcrumb.html">
<span class="sidebar-menu-text">Breadcrumb</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-accordions.html">
<span class="sidebar-menu-text">Accordions</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-modals.html">
<span class="sidebar-menu-text">Modals</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="compact-ui-chips.html">
<span class="sidebar-menu-text">Chips</span>
</a>
</li> -->
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button disabled" href="">
                               <span class="sidebar-menu-text">Disabled</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane" id="sm_plugins">
           <div class="sidebar-heading">Plugins</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item open">
                   <a class="sidebar-menu-button" data-toggle="collapse" href="#plugins_menu">
                       <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                       Plugins
                       <span class="ml-auto sidebar-menu-toggle-icon"></span>
                   </a>
                   <ul class="sidebar-submenu collapse sm-indent" id="plugins_menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-charts.html">
                               <span class="sidebar-menu-text">Charts</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-flatpickr.html">
                               <span class="sidebar-menu-text">Flatpickr</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-daterangepicker.html">
                               <span class="sidebar-menu-text">Date Range Picker</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-dragula.html">
                               <span class="sidebar-menu-text">Dragula</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-dropzone.html">
                               <span class="sidebar-menu-text">Dropzone</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-range-sliders.html">
                               <span class="sidebar-menu-text">Range Sliders</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-quill.html">
                               <span class="sidebar-menu-text">Quill</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-select2.html">
                               <span class="sidebar-menu-text">Select2</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-nestable.html">
                               <span class="sidebar-menu-text">Nestable</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-fancytree.html">
                               <span class="sidebar-menu-text">Fancy Tree</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-maps-vector.html">
                               <span class="sidebar-menu-text">Vector Maps</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-sweet-alert.html">
                               <span class="sidebar-menu-text">Sweet Alert</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button" href="compact-ui-plugin-toastr.html">
                               <span class="sidebar-menu-text">Toastr</span>
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button disabled" href="">
                               <span class="sidebar-menu-text">Disabled</span>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="tab-pane" id="sm_layouts">
           <div class="sidebar-heading">Layouts</div>
           <ul class="sidebar-menu">
               <li class="sidebar-menu-item active">
                   <a class="sidebar-menu-button" href="compact-analytics.html">
                       <span class="sidebar-menu-text">Compact</span>
                   </a>
               </li>
               <li class="sidebar-menu-item">
                   <a class="sidebar-menu-button" href="mini-analytics.html">
                       <span class="sidebar-menu-text">Mini</span>
                   </a>
               </li>
               <li class="sidebar-menu-item">
                   <a class="sidebar-menu-button" href="analytics.html">
                       <span class="sidebar-menu-text">App</span>
                   </a>
               </li>
               <li class="sidebar-menu-item">
                   <a class="sidebar-menu-button" href="boxed-analytics.html">
                       <span class="sidebar-menu-text">Boxed</span>
                   </a>
               </li>
               <li class="sidebar-menu-item">
                   <a class="sidebar-menu-button" href="sticky-analytics.html">
                       <span class="sidebar-menu-text">Sticky</span>
                   </a>
               </li>
               <li class="sidebar-menu-item">
                   <a class="sidebar-menu-button" href="fixed-analytics.html">
                       <span class="sidebar-menu-text">Fixed</span>
                   </a>
               </li>
           </ul>
       </div>
   </div>

   <div class="sidebar-heading mt-3"><strong>Select company</strong></div>
   <a href="" class="dropdown-item active d-flex align-items-center">

       <div class="avatar avatar-sm mr-8pt">

           <span class="avatar-title rounded bg-primary">FM</span>

       </div>

       <small class="ml-4pt flex">
           <span class="d-flex flex-column">
               <strong class="text-100">FrontendMatter Inc.</strong>
               <span class="text-50">Administrator</span>
           </span>
       </small>
   </a>
   <a href="" class="dropdown-item d-flex align-items-center mb-3">

       <div class="avatar avatar-sm mr-8pt">

           <span class="avatar-title rounded bg-accent">HH</span>

       </div>

       <small class="ml-4pt flex">
           <span class="d-flex flex-column">
               <strong class="text-100">HumaHuma Inc.</strong>
               <span class="text-50">Publisher</span>
           </span>
       </small>
   </a>
</div>

</div>
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
<script src="vendor/perfect-scrollbar.min.js"></script>

<!-- DOM Factory -->
<script src="vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="vendor/material-design-kit.js"></script>

<!-- App JS -->
<script src="js/app.js"></script>

<!-- Highlight.js -->
<script src="js/hljs.js"></script>

<!-- Global Settings -->
<script src="js/settings.js"></script>

<!-- Moment.js -->
<script src="vendor/moment.min.js"></script>
<script src="vendor/moment-range.js"></script>

<!-- Chart.js -->
<script src="vendor/Chart.min.js"></script>
<script src="js/chartjs.js"></script>
<script src="js/chartjs-rounded-bar.js"></script>

<!-- Chart.js Samples -->
<script src="js/page.analytics-2-dashboard.js"></script>

<!-- List.js -->
<script src="vendor/list.min.js"></script>
<script src="js/list.js"></script>

<!-- Tables -->
<script src="js/toggle-check-all.js"></script>
<script src="js/check-selected-row.js"></script>

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
       

</body></html>