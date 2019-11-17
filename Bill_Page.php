<!DOCTYPE html>
<html lang="en">

<head>
  <title>Billing</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link rel="stylesheet" href="../EAudit_ELucifers/assets/css/main_style.css">
</head>

<body>



  <!-- Navigation Bar -->
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="../index.html">
          Smart Eaudit </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
          aria-label="Toggle navigation">
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
              <i class="material-icons">apps</i> Rooms
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./bedroom.html" class="dropdown-item">
                <i class="material-icons">layers</i> Bedroom
              </a>
              <a href="./living.html" class="dropdown-item">
                <i class="material-icons">layers</i> Living Room
              </a>
              <a href="./Bill_Page.php" class="dropdown-item">
                <i class="material-icons">layers</i> Billing
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="link">
              <i class="material-icons">settings</i> Settings
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg3.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1>Billing</h1>
            <h3 class="title text-center">Manage and check your Bills from here</h3>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Total Bill: </h2>
        <div>
          <?php
            // $user = 'root';
            // $pass = '';
            // $db = 'test_db';

            // $db = new mysqli('localhost', $user , $pass , $db) or die("Unable to connect");
            

            // $tobe = 'SELECT sno from Eaudit where sno = 1';
            // $tobepr = mysqli_query($db,$tobe);
            // echo "$tobepr";
            $document = file_get_contents('./bill.txt');
            echo $document;

          ?>
        </div>

      </div>
    </div>
  </div>





  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.link/">
              Smart Eaudit
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.link/" target="blank">Smart Eaudit</a> for a better world.
      </div>
    </div>
  </footer>


  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script>
    $(document).ready(function () {
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