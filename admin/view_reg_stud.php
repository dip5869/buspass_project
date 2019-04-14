<!DOCTYPE html>
<?php 
error_reporting(0);
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
          <h3 style="color:green">VIEW REGISTER STUDENTS HERE</h3>
           <center><form method="post" action="view_reg_stud.php" align="center">
                              <table style="width:50%" align="center" >
                                <tr>
                                  <td colspan="2" align="center" ></td>
                                  <td><center><input type="text" name="stuname" placeholder="enter student name " style="border:8px solid rgba(211,211,211,0.5);height: 70px;
                width: 250px;"required><input type="submit" name="submit" value="SEARCH" style="border-radius: 70%; border: 10px solid rgba(211,211,211,0.5);height: 130px;
                width: 130px;background-color:#CCFFFF;"></center></td>
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
      <div class="container-fluid">
       <table align="center" width="100%" border="1" style="margin-top:10px;">
  <tr style="background-color:black; color:#fff;font-size:18px;">
    <th>no</th>
    <th>NAME</th>
    <th>PRN</th>
    <th>EMAIL ID</th>
    <th>COLLEGE</th>
    <th>ROUTE</th>
    <th>CLASS</th>
    <th>DATE OF BITH</th>
    <th>IMAGE</th>
    <th>BFC</th>
    <th>ISSUE_PASS</th>
    <th>GIVE_PASS</th>
  </tr>
  <?php 

if(isset($_POST['submit']))
{
  include('../dbcon.php');
  $name=$_POST['name'];
  //$fee=$_POST['fee'];
  $sql="SELECT * FROM `student` WHERE `name` LIKE '%$name%'";
  // echo $sql;
  $run=mysqli_query($con,$sql);

  if(mysqli_num_rows($run)<1)
  {
    echo'<tr style="background-color:blue;color:white;"><td colspan="9">TILL STUDENT ARE NOT REGISTERED.</td></tr>';
  }
  else
  {
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {
      $count++;
      ?>
      <tr style="background-color:black; color:blue;font-size:18px;">
        <td><?php echo $count; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['prn']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['collge']; ?></td>
        <td><?php echo $data['route']; ?></td>
        <td><?php echo $data['class']; ?></td>
        <td><?php echo $data['dob']; ?></td>
        <td> <img src="../dataimg/<?php echo $data['image']; ?>" style="height:100px;width:100px;"></td>
        <td> <img src="../dataimg/<?php echo $data['bfc']; ?>" style="height:100px;width:100px;"></td>

        <td><a href="issue_pass.php?sid=<?php echo $data['id']; ?>"><button type="button" class="btn btn-outline-primary">ISSUE_PASS</button></a></td>
        <td><a href="show_passes.php?sid=<?php echo $data['id']; ?>"><button type="button" class="btn btn-outline-primary">GIVE_PASS</button></a></td>

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





























