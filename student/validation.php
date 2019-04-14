<?php 


session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userlog');

$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from users where name='$name' && password='$pass'";
$r=mysqli_query($con,$q);
$num= mysqli_num_rows($r);

if($num==1)
{

	$_SESSION['username']=$name;
	header('location:home.php');
}
else
{
	echo"please login first";
	header('location:login.php');

}

 ?>