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
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" >

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
             <center> <h1><a href="admindash.php" class="scrollto"><b>ADMIN DASHBOARD</b></a></h1></center>

      <div align="center">

        <h1><a href="" class="scrollto"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
<!-- #nav-menu-container -->
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
          <h3 style="color:green">UPDATE THE ROUTES HERE</h3>
           <center><form method="post" action="updatepass.php" align="center">
                              <table style="width:50%" align="center" >
                                <tr>
                                  <td colspan="2" align="center" ></td>
                                  <td><input type="text" name="route" placeholder="enter the route" style="border:8px solid rgba(211,211,211,0.5);height: 70px;
                                  width: 300px;"required><input type="submit" name="submit" value="UPDATE_ROUTE"style="border-radius: 70%;border: 10px solid rgba(211,211,211,0.5);height: 150px;
                                  width: 150px;background-color:#CCFFFF;"></td>
                                </tr>
                                <tr>
                                  <td colspan="2" align="center"></td>
                                  <td></td>
                                </tr>
                              </table>
                          </form></center>
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
       <table align="center" width="100%" border="1" style="margin-top:10px;background-color:blue">
  <tr style="background-color:#000; color:#fff;">
    <th>no</th>
    <th>ROUTE</th>
    <th>FEE</th>
    <th>EDIT</th>
  </tr>
<?php 

if(isset($_POST['submit']))
{
  include('../dbcon.php');
  $route=$_POST['route'];
  //$fee=$_POST['fee'];
  $sql="SELECT * FROM `passes` WHERE `route` LIKE '%$route%'";
  // echo $sql;
  $run=mysqli_query($con,$sql);

  if(mysqli_num_rows($run)<1)
  {
    echo'<tr><td colspan="5">no records found</td></tr>';
  }
  else
  {
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {
      $count++;
      ?>
      <tr style="color:white;background-color:silver;">
    <td><?php echo $count; ?></td>
    <td><?php echo $data['route']; ?></td>
    <td style=" color:red;"><?php echo $data['fee']; ?></td>
    <td><a href="updatepassform.php?sid=<?php echo $data['id']; ?>"><button type="button" class="btn btn-outline-success">EDIT</button>
</a></td>
    </tr>
      <?php
    }
  }
}


 ?>

</table>

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





























