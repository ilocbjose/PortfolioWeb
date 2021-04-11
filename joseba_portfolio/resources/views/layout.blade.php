<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../public/img/favicon.png">
  <link rel="icon" type="image/png" href="../public/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Joseba Urizarbarrena
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awechrsome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../public/css/material-kit.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../public/demo/demo.css" rel="stylesheet" />
</head>
<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/PortfolioWeb/joseba_portfolio/public/">
          Joseba Urizarbarrena - Software Developer </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">list</i> Options
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <!-- Rutas aun por determinar -->
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">contact_page</i> Contact
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">code</i> Projects
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter " data-parallax="true" style="background-image: url('../public/img/toronto-skyline.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1 class="headerblack">Joseba Urizarbarrena</h1>
            <h3 class="headerblack">Self-learning software engineering through research & development.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      @yield('content')
  </div>
    <div class="sharing-area text-center">
      <div class="row justify-content-center">
        <h3>Thank you for supporting me!</h3>
      </div>
      <a id="twitter" class="btn btn-raised btn-twitter" href="https://twitter.com/ilocbjose" rel="nofollow">
        <i class="fa fa-twitter"></i>
        Tweet
      </a>
      <a id="facebook" class="btn btn-raised btn-facebook" href="https://www.linkedin.com/JosebaUrizarbarrena" rel="nofollow">
        <i class="fa fa-facebook-square"></i>
        Linkedin
      </a>
      <a id="instagram" class="btn btn-raised btn-instagram" href="https://www.instagram.com/eljodidojose" rel="nofollow">
        <i class="fa fa-instagram"></i>
        Instagram
      </a>
      <a id="github" href="https://github.com/ilocbjose" target="_blank" class="btn btn-raised btn-github" rel="nofollow">
        <i class="fa fa-github"></i>
        Github
      </a>
    </div>
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://demos.creative-tim.com/">
              Material Kit
            </a>
          </li>
          <li>
            <a href="contact_form">
              Contact
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/blog">
              Projects
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with Material Kit by
                Joseba Urizarbarrena
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../public/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../public/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../public/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../public/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../public/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../public/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../public/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>
</html>
