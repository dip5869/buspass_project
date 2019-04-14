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
include('../dbcon.php');


$sid= $_GET['sid'];

$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);

 ?>


 <h1 align="center" style="color:#FF4500" class="animated shake ">SEND PASSES HERE</h1>
  <hr>

<form action="sendpass.php" method="post" enctype="multipart/form-data">
 	<table border="1" align="center" style="width:70%; margin-top:40px;background-color:blue;color:white;">
 		<tr>
 			<td align="center"	>Prn</td>
 			<td><input type="text" name="prn" value="<?php echo $data['prn'];?>" required></td>
 		</tr>
 		<tr>
 			<td align="center"	>Name</td>
 			<td><input type="text" name="user" value="<?php echo $data['name'];?>" required></td>
 		</tr>
 		<tr>
 			<td align="center"	>EMAIL</td>
 			<td><input type="text" name="email" value="<?php echo $data['email'];?>" required></td>
 		</tr>
 		<tr>
 			<td align="center">collge_name</td>
 			<td><input type="text" name="collge" value="<?php echo $data['collge'];?>" required></td>
 		</tr>
 		<tr>
 			<td align="center">ROUTE</td>
 			<td><input type="text" name="route" value="<?php echo $data['route'];?>" required></td>
 		</tr>
 		<tr>
 			<td align="center">CLASS</td>
 			<td><input type="text" name="class" value="<?php echo $data['class'];?>" required></td>
 		</tr>
 		<tr>
 			<td align="center">DATE OF BIRTH</td>
 			<td><input type="date" name="dob" value="<?php echo $data['dob'];?>" required></td>
 		</tr>
 		<tr>
 			<td align="center">FEE</td>
 			<td><input type="text" name="fee" value="<?php echo $data['fee'];?>" required></td>
 		</tr>

 		
 		<tr>
 			<td colspan="2" align="right">
 				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				<button type="submit" class="btn btn-outline-success"> <h5 style="color:white">SEND-PASS</h5></button>
 			</td>
 		</tr>
 	</table>

 </form>



