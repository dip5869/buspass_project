<?php 
//error_reporting(0);

		include('../dbcon.php');
		$image=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,"../dataimg1/$image");
		$name=$_POST['user'];
		$collge=$_POST['collge'];
		$route=$_POST['route'];
		$class=$_POST['class'];
		$dob=$_POST['dob'];
		$fee=$_POST['fee'];
		$passid=$_POST['passid'];
		$attested=$_POST['attested'];
		$validity=$_POST['validity'];

		// $city=$_POST['city'];
		// $pcon=$_POST['pcon'];
		// $std=$_POST['std'];
		// $id=$_POST['sid'];
	
		// $imagename = $_FILES['simg'] ['name'];
		// $tempname = $_FILES['simg'] ['tmp_name'];
	
		// move_uploaded_file($tempname,"..\dataimg\ $imagename");

		 $qry="INSERT INTO `given_passes` (`image`,`user`, `collge`, `route`, `class`, `dob`,`fee`,`passid`,`attested`,`validity`) VALUES ('$image','$name','$collge','$route','$class','$dob','$fee','$passid','$attested','$validity')";
		
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