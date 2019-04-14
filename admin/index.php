<?php 
error_reporting(0);

 ?>

 <html>
 <head>
 	<title>photo uploading</title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">

 	enter name<input type="text" name="a">
 	enter rollno<input type="text" name="b">
 	enter name<input type="file" name="c">

 	</form>
 </body>
 </html>

 <?php 
 $con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'image uploading');

$a=$_POST['a'];
$b=$_POST['b'];


$c= $_FILES["c"]["name"];
$tempname=$_FILES["c"]["tmp_name"];
$folder= "img/".$c;
move_uploaded_file($tempname,$folder);


$q="select * from iam where name='$a'";
$r=mysqli_query($con,$q);
$num= mysqli_num_rows($r);

if($num==1)
{
	echo"<h1>USER ALREADY REGISTERED!!!...please wait we will redirect to registration within FOUR second.</h1>";
//header( "refresh:4;url=stud_login.php" );
}
else
{
	$reg="insert into iam(name,rno,image) values('$a' ,'$b','$folder')";
	mysqli_query($con,$reg);
	echo"<h1>Registration Succesfull...please wait we will redirect to LOGIN within FOUR second</h1>";
//header( "refresh:2;url=stud_login.php" );
}

 ?>


  ?>