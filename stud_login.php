<html>
<head>
	<title>login and registration</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- 	<link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

 	<div class="container-fluid" style="height:120px;background-color:#F8F8FF"><a href="index.php"><img src="logo.png" style="height:120px;"></a></div>
<body background="images/back.jpg" style="background-repeat: no-repeat;background-size:cover;background-attachment: fixed;
	background-position: center;">
 <h2 style="color:white" align="center"><b>LOGIN HERE</b></h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-6">
				<center><form action="validation.php" method="post" enctype="multipart/form-data" style="background: rgba(211,211,211,0.5);">
								<div class="form-group" align="left" style="padding:25px;">
									<label><b>USERNAME</b></label>
									<input type="text" name="user" class="form-control" required>
								</div>
								<div class="form-group" align="left" style="padding:25px;">
									<label><b>PASSWORD</b></label>
									<input type="password" name="password" class="form-control" required>
								</div>
								<div class="g-recaptcha" data-sitekey="6LcOrYUUAAAAAG6pfShP-ii-Ie9_4AQqelOlXPAk"></div><br>

								<button type="submit" class="btn btn-outline-primary" style="margin-bottom:20px">LOGIN</button>
								<button type="reset" class="btn btn-outline-primary" style="margin-bottom:20px">RESET</button>
								<h4 style="padding:25px;">Not A Member Yet?<a href="stud_registration.php">&nbsp;&nbsp;&nbsp;Click Here</a></h4>
							</form></center>
		</div>
	</div>
</body>
</html>
