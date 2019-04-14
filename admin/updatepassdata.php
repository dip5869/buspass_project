<?php 


		include('../dbcon.php');
		$route=$_POST['route'];
		$fee=$_POST['fee'];
		// $city=$_POST['city'];
		// $pcon=$_POST['pcon'];
		// $std=$_POST['std'];
		$id=$_POST['sid'];
	
		// $imagename = $_FILES['simg'] ['name'];
		// $tempname = $_FILES['simg'] ['tmp_name'];
	
		// move_uploaded_file($tempname,"..\dataimg\ $imagename");

		// $qry="INSERT INTO `student` (`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
		$qry="UPDATE  `passes` SET  `route` =  '$route',
		`fee` =  '$fee'
		 WHERE `id` ='$id'";
				//$run = mysqli_query($con,$qry);

		if(mysqli_query($con,$qry))
		{
			?>
			<script>
				alert('PASS UPDATED SUCCESSFULLY.');
			window.open('updatepassform.php? sid=<?php echo $id;?>','_self');


			</script>
			<?php
		}
		else
		{
			echo"PASSDATA NOT UPDATED!.";
		}
	


 ?>