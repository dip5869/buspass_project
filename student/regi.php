<?php 


session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userlog');

$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from users where name='$name'";
$r=mysqli_query($con,$q);
$num= mysqli_num_rows($r);

if($num==1)
{
	echo"<h1>Username Already Taken ...please wait we will redirect to registration within FOUR second</h1>";
header( "refresh:4;url=login.php" );
}
else
{
	$reg="insert into users(name,password) values('$name' ,'$pass')";
	mysqli_query($con,$reg);
	echo"<h1>Registration Succesfull...please wait we will redirect to LOGIN within FOUR second</h1>";
header( "refresh:2;url=login.php" );
}

 ?>