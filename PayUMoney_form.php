
<?php

$MERCHANT_KEY = "BQnw4ffs";
$SALT = "xRUAsrAvoK";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";   // For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html lang="en">
<head>
   <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
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

<body onload="submitPayuForm()">
    <?php if($formError) { ?>
  
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div >
        <h1 align="center"><a href="#" class="scrollto"><b>payU Form</b></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
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
          <h3 style="color:green">FilL payment details here</h3>
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


<form  action="<?php echo $action;?> " method="post" name="payuForm" style="background: rgba(211,211,211,0.5);">
  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                  <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                  <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                <fieldset>
                 <div class="form-group" align="left" style="padding:25px;">
                   <label for="route"><b>AMOUNT:</b></label>
                    <input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" placeholder="enter pass-amount"/>   
                  </div>
                  <div class="form-group" align="left" style="padding:25px;">
                   <label for="route"><b>NAME:</b></label>
                    <input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" class="form-control" placeholder="enter Name"/>               
                  </div>
                   <div class="form-group" align="left" style="padding:25px;">
                   <label for="route"><b>EMAIL:</b></label>
                    <input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" class="form-control" placeholder="enter Email"/>               
                  </div>
                  <div class="form-group" align="left" style="padding:25px;">
                   <label for="route"><b>PHONE:</b></label>
                    <input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" class="form-control" placeholder="enter Phone"/>                 
                  </div>
                  <div class="form-group" align="left" style="padding:25px;">
                   <label for="route"><b>PASS INFO:</b></label>
                    <textarea class="form-control" name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>            
                  </div>
                      <input type="hidden" name="surl" value="http://localhost/bus-ap/success.php" <?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" />                  
                      <input type="hidden" name="furl" value="http://localhost/bus-ap/success.php" <?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" />
                      <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                  <div class="form-group" align="left" style="padding:25px;">
                   <?php if(!$hash) { ?>
                  <center><button type="submit" name="submit" class="btn btn-outline-primary" style="margin-bottom:20px;">SUBMIT</button>
                  <button type="reset" name="reset" class="btn btn-outline-primary" style="margin-bottom:20px;">RESET</button></center>

                    <?php } ?>
                  </div>         
                  </fieldset>  
                </fieldset>
              </form>        
       </div>
      </div>
    </div>
  </div>
         

       

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
