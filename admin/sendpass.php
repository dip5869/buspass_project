<?php 
//error_reporting(0);

		include('../dbcon.php');
		$name=$_POST['user'];
		$prn=$_POST['prn'];
		$collge=$_POST['collge'];
		$route=$_POST['route'];
		$class=$_POST['class'];
		$dob=$_POST['dob'];
		$fee=$_POST['fee'];

		// $city=$_POST['city'];
		// $pcon=$_POST['pcon'];
		// $std=$_POST['std'];
		// $id=$_POST['sid'];
	
		// $imagename = $_FILES['simg'] ['name'];
		// $tempname = $_FILES['simg'] ['tmp_name'];
	
		// move_uploaded_file($tempname,"..\dataimg\ $imagename");

		 $qry="INSERT INTO `sended_passes` (`name`,`prn`, `collge`, `route`, `class`, `dob`,`fee`) VALUES ('$name','$prn','$collge','$route','$class','$dob','$fee')";
		
				//$run = mysqli_query($con,$qry);

		if(mysqli_query($con,$qry))
		{
			header('location:admindash.php');
		}
		else
		{
			echo"PASS NOT SEND";
		}
	
 ?>