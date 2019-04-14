<!DOCTYPE html>
<?php 
session_start();

  if(isset($_SESSION['uid']))
  {
    echo "";
  }
  else
  {
    header('location:../login.php');
  }

 ?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BUSS PASS OFFICIAL SITE</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/logo.png" rel="icon">
  <link href="../img/logo.png" >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<header id="header">
    <div class="container-fluid">

      <div >
        <h1 align="center"><a href="#intro" class="scrollto"><b>ADMIN DASHBOARD</b></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="logout.php" ><button type="button" class="btn btn-outline-danger">LOGOUT</button></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!--==========================
    Header
  ============================-->
 

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active"><div class="carousel-background"><img src="../img/bus7.png" alt=""></div>
            <div class="carousel-container">
            

              <div class="container-fluid">
 <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <a class="cta-btn" href="addpass.php" style="width:340px">INSERT ROUTE HERE</a><br>
        <a class="cta-btn" href="updatepass.php" style="width:350px">UPDATE ROUTE HERE</a><br>
        <a class="cta-btn" href="deletepass.php" style="width:360px">DELETE ROUTE HERE</a><br>
        <a class="cta-btn" href="addprn.php" style="width:370px">INSERT STUDENTS PRN HERE</a><br>
        <a class="cta-btn" href="view_reg_stud.php" style="width:380px">VIEW REGISTRED STUDENTS HERE</a><br>
        <a class="cta-btn" href="view_req_passes.php" style="width:390px">VIEW REQUESTED PASSES HERE</a><br>
        <a class="cta-btn" href="view_feedback.php" style="width:400px">VIEW FEEDBACKS HERE</a>

      </div>
    </section>
                <hr>
   
</div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">      
          </div>
        </div>
      </div>
    </div>

    <div class="container">   
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>




