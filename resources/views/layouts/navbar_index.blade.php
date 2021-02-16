
<div class="mdk-header-layout js-mdk-header-layout">
    <div id="header"
         class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0"
         data-effects="parallax-background waterfall"
         data-fixed
         data-condenses>
        <div class="mdk-header__bg">
            <div class="mdk-header__bg-front"
                 style="background-image: url(images/Garment-Factory1-.jpg);"></div>
        </div>
        <div class="mdk-header__content justify-content-center">

            <div class="navbar navbar-expand navbar-dark-pickled-bluewood bg-transparent will-fade-background"
                 id="default-navbar"
                 data-primary>

                <!-- Navbar toggler -->
                <!-- <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                        type="button"
                        data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button> -->

                <!-- Navbar Brand -->
                <a href="{{route('index')}}"
                   class="navbar-brand mr-16pt">
                    <!-- <img class="navbar-brand-icon" src="../../public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                    <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                        <span class="avatar-title rounded bg-primary"><img src="images/logo/api-logo.png"
                                 alt="logo"
                                 class="img-fluid" /></span>

                    </span>
                    @foreach ($headersdata as $item)
                    <span class="d-none d-lg-block">{{$item->menu_name}}</span>    
                    @endforeach

                    
                </a>

                <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                    <li class="nav-item dropdown">
                        <a href="#features_description"
                           class="nav-link ">Features</a>
                       
                    </li>
                    <li class="nav-item">
                        <a href="{{route('indexpricing')}}"
                           class="nav-link">Packages and Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#"
                           class="nav-link dropdown-toggle"
                           data-toggle="dropdown"
                           data-caret="false">HelpDesk</a>
                        <div class="dropdown-menu">
                            <a href="#faq"
                               class="dropdown-item">FAQ</a>
                            <a href=""
                               class="dropdown-item">Tutorial</a>
                            <a href=""
                               class="dropdown-item">Video Tutorial</a>
                            <a href=""
                               class="dropdown-item">Release Notes</a>
                            <a href=""
                               class="dropdown-item">What's New</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact')}}"
                           class="nav-link">Contact Us</a>
                    </li>
                    <!--
                           <a href="discussion.html"
                               class="dropdown-item">Discussion Details</a>
                            <a href="discussions-ask.html"
                               class="dropdown-item">Ask Question</a>
                        </div> -->
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
                           class="btn btn-outline-white">Get Started</a>
                    </li>
                </ul>
            </div>

           
            <div class="hero container page__container text-center text-md-left py-112pt">
               <h1 class="text-white text-shadow">PDLC</h1>
               <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">Product Developement Lifecycle Software <br>For Garments Manufacturing</p>
      
               <a href="{{route('signup')}}"
                  class="btn btn-lg btn-white btn--raised mb-16pt">Get Started</a>
                  
                  <p class="mb-0"><a href=""
                    class="text-white text-shadow"><strong>Are you a 
                       Businessman?</strong></a></p>    
                  
      
               
      
           </div>
                
            
        </div>
    </div>
