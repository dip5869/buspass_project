<?php 
//error_reporting(0);

		include('../dbcon.php');
		$passid=$_POST['passid'];
		$name=$_POST['user'];
		$collge=$_POST['collge'];
		$route=$_POST['route'];
		$class=$_POST['class'];
		$dob=$_POST['dob'];
		$fee=$_POST['fee'];
		$depomanager=$_POST['depomanager'];
		// $city=$_POST['city'];
		// $pcon=$_POST['pcon'];
		// $std=$_POST['std'];
		// $id=$_POST['sid'];
	
		// $imagename = $_FILES['simg'] ['name'];
		// $tempname = $_FILES['simg'] ['tmp_name'];
	
		// move_uploaded_file($tempname,"..\dataimg\ $imagename");

		 $qry="INSERT INTO `show_student_passes` (`passid`,`name`, `collge`, `route`, `class`, `dob`,`fee`,`depomanager`) VALUES ('$passid','$name','$collge','$route','$class','$dob','$fee','$depomanager')";
		
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