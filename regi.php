<?php 
error_reporting(0);

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'bus-app');

$name=$_POST['user'];
$prn=$_POST['prn'];
$email=$_POST['email'];
$collge=$_POST['collge'];
$route=$_POST['route'];
$class=$_POST['class'];
$dob=$_POST['dob'];
$image=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,"dataimg/$image");

$bfc=$_FILES['bfc']['name'];
$tempname=$_FILES['bfc']['tmp_name'];
move_uploaded_file($tempname,"dataimg/$bfc");
// $fee=$_POST['fee'];
$pass=$_POST['password'];

$q="select * from student where name='$name'";
$r=mysqli_query($con,$q);
$num= mysqli_num_rows($r);

if($num==1)
{
	echo"<h1>USER ALREADY REGISTERED!!!...please wait we will redirect to registration within FOUR second.</h1>";
header( "refresh:4;url=register_stud.php" );
}
else
{
	$reg="insert into student(prn,name,email,collge,route,class,dob,image,bfc,password) values('$prn','$name','$email','$collge','$route','$class','$dob','$image','$bfc','$pass')";
	mysqli_query($con,$reg);
	echo"<h1>Registration Succesfull...please wait we will redirect to LOGIN within FOUR second</h1>";
header( "refresh:2;url=index.php #services" );
}

?>