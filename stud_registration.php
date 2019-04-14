
<html>
<head>
	<title>login and registration</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

 <div class="container-fluid" style="height:120px;background-color:#F8F8FF"><a href="index.php"><img src="logo.png" style="height:120px;"> </a>
 </div>
 <h2 style="color:white" align="center"><b>REGISTER HERE</b></h2>
<body background="images/back.jpg" style="background-repeat: no-repeat;background-size:cover;background-attachment: fixed;
	background-position: center;">




<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-6">
				<center><form action="regi.php" method="post" enctype="multipart/form-data" style="background: rgba(211,211,211,0.5);width:750px;">
  	   						 <div class="form-group" align="left" style="padding:25px;">
							<label ><b>NAME</b></label>
							<input type="text" name="user" class="form-control"  required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">
								<label><b>EMAIL ID</b></label>
								<input type="text" name="email" class="form-control"  required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">              
								<label><b>COLLEGE_NAME</b></label>
								<input type="text" name="collge" class="form-control"  required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">              
								<label><b>ROUTE</b></label>
								<input type="text" name="route" class="form-control"  required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">              
								<label><b>CLASS</b></label>
								<input type="text" name="class" class="form-control"  required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">              
								<label><b>DATE OF BIRTH</b></label>
								<input type="date" name="dob" class="form-control"  required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">              
								<label><b>IMAGE</b></label>
								<input type="file" name="image" value="" class="form-control"  required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">              
								<label><b>BONAFIDE CERTIFICATE</b></label>
								<input type="file" name="bfc" value="" class="form-control" required>
							</div>
							<div class="form-group" align="left" style="padding:25px;">              
								<label><b>PASSWORD</b></label>
								<input type="password" name="password" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-outline-primary" style="margin-bottom:20px">REGISTER</button>
							<button type="reset" class="btn btn-outline-primary" style="margin-bottom:20px">RESET</button>
							<h4 style="padding:25px;">Already A Member?<a href="stud_LOGIN.php">Click Here</a></h4>

				</form></center>
		</div>
	</div>
</body>
</html>