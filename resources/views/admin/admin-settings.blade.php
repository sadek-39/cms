<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

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

    <body class="layout-default layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form card">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                <a href="index.html"
                   class="navbar-brand flex-column mb-2 align-items-center mr-0"
                   style="min-width: 0">

                    <span class="avatar avatar-sm navbar-brand-icon mr-0">

                        <span class="avatar-title rounded bg-primary"><img src="images/logo/api-logo.png"
                                 alt="logo"
                                 class="img-fluid" /></span>

                    </span>

                    API
                </a>
                
            </div>

            
            <form action="{{route('settingscreate')}}" method="POST">
              @csrf
                <div class="form-group">
                  <label for="Title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="Meta Keyword">Meta Keyword</label>
                    <input type="text" name="meta_keyword" class="form-control" id="metakeyword" placeholder="Meta Keyword">
                </div>
                <div class="form-group">
                    <label for="Meta Description">Meta Description</label>
                    <textarea type="text" name="meta_description" class="form-control" id="metadescription" placeholder="Meta Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="Header Section">Header Section</label>
                    <input type="text" name="header_section" class="form-control" id="headerSection" placeholder="Meta Keyword">
                </div>
                <div class="form-group">
                    <label for="Footer Section">Footer Section</label>
                    <input type="text" name="footer_section" class="form-control" id="footerSection" placeholder="Meta Keyword">
                </div>
                <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <textarea type="text" name="copyright" class="form-control" id="copyright" placeholder="Copyright"></textarea>
                </div>
                <div class=" form-group">
                    <label for="inlineFormInputGroup">Social Links</label>
                    <div class="input-group mb-2">
                        <input type="text" name="social_links" class="form-control" id="htop"/>
                        <input type="button" name="increase" value="+" onclick="increaseBtnOnclick()"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" name="address" class="form-control" id="Address" placeholder="Adress">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="phone" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Feedbackmail">Feedback Receiver email</label>
                    <input type="email" name="fremail" class="form-control" id="phone" placeholder="Feedback Receiver Email">
                </div>  
                <button  class="btn btn-primary">Submit</button>
              </form>             
        </div>

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