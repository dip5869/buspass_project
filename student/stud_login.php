<html>
<head>
	<title>login and registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>


<div class="container">
	<div class="login-box">	
					<div class="row">
						<div class="col-md-6 login-left">
							<h2>login here</h2>
							<form action="validation.php" method="post">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="user" class="form-control" required>
								</div>
								<div class="form-group">
									<label>password</label>
									<input type="password" name="password" class="form-control" required>
								</div>
								<button type="submit" clas="btn btn-primary">Login</button>
								<button type="reset" clas="btn btn-primary">reset</button>
							</form>
						</div>

		
				<div class="col-md-6 login-right">
					<h2>Register Here </h2>
					
					<form action="regi.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" required>
						</div>
						<div class="form-group">              
							<label>password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" clas="btn btn-primary">Register</button>
						<button type="reset" clas="btn btn-primary">reset</button>
					</form>
				</div>
	</div>
	</div>
</div>
</body>
</html>