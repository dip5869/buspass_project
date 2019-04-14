
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

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div >
        <h1 align="center"><a href="admindash.php" class="scrollto"><b>ADMIN DASHBOARD</b></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="logout.php" ><button type="button" class="btn btn-outline-danger">LOGOUT</button></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
   

    <!--==========================
      About Us Section
    ============================-->
    <!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp"><br><br>
          <h3 style="color:green">INSERT PRN HERE</h3>
        </header>

        <div class="row">


      </div>
  </div>
 </div>
    </section>
<!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
           <div class="col-md-12 col-md-offset-6">
              <form action="addprn.php" method="post" style="background: rgba(211,211,211,0.5);">
                <fieldset>
                 <div class="form-group" align="left" style="padding:25px;">
                   <label for="route"><b>PRN:</b></label>
                  <input type="text" name="prn" class="form-control" placeholder="enter the prn" required>
                  </div></center>
                  <!-- <center><div class="form-group" align="left" style="padding:25px;">
                    <label for="fee"><b>NAME:</b></label>
                  <input type="text" name="name" class="form-control" placeholder="enter the fee" required>
                  </div>   -->            
                  </fieldset>
                  <center><button type="submit" name="submit" class="btn btn-primary" style="margin-bottom:20px;">INSERT</button>
                  <button type="reset" name="reset" class="btn btn-primary" style="margin-bottom:20px;">RESET</button></center>
                </fieldset>
              </form>
       </div>
      </div>
    </div>

    <?php 
  if(isset($_POST['submit']))
  {

    include('../dbcon.php');
    
    $prn=$_POST['prn'];
    // $fee=$_POST['fee'];
  
$qry="INSERT INTO `stud_prn` (`prn`) VALUES ('$prn')";

    if(mysqli_query($con,$qry))
    {
      ?>
      <script>
        alert('PRN INSERTED SUCCESSFULLY.');
      </script>
      <?php
    }
    else
    {
      echo"PRN NOT INSERTED!";
    }
  }

 ?>
         

       

    <div class="container">
      <div class="copyright">
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="">&nbsp;&nbsp;DipakAher</a>
      </div>
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
