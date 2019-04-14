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

<?php 
include('header.php');
include('titlehead.php');
 ?>
<html>
<body>
	<h1 align="center" style="color:white">ADD PASS</h1>
 <form action="addpass.php" method="post" endtype="multipart/form-data">
 	<table border="1" align="center" style="width:60%; margin-top:40px;background-color:blue">
 		<tr>
 			<td align="center"><h5 style="color:white">ROUTE</h5></td>
 			<td><input type="text" name="route" placeholder="enter the route" required></td>
 		</tr>
 		<tr>
 			<td align="center"><h5 style="color:white">PASS FEE</h5></td>
 			<td><input type="text" name="fee" placeholder="enter the fee" required></td>
 		</tr>

 		<tr>
 			<td colspan="2" align="right"><button type="submit" name="submit" class="btn btn-outline-success"> <h6 style="color:white;">INSERT-PASS</h6></button></td>
 		</tr>
 	</table>

 </form>
</body>
</html>

<?php 
	if(isset($_POST['submit']))
	{

		include('../dbcon.php');
		
		$route=$_POST['route'];
		$fee=$_POST['fee'];
	
$qry="INSERT INTO `passes` (`route`, `fee`) VALUES ('$route','$fee')";

		if(mysqli_query($con,$qry))
		{
			?>
			<script>
				alert('PASS INSERTED SUCCESSFULLY.');
			</script>
			<?php
		}
		else
		{
			echo"PASS NOT INSERTED!";
		}
	}

 ?>
