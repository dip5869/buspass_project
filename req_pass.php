<?php 
error_reporting(0);

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'bus-app');

$amount=$_POST['amount'];
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$productinfo=$_POST['productinfo'];

// $image=$_FILES['image']['name'];
// $tempname=$_FILES['image']['tmp_name'];
// move_uploaded_file($tempname,"dataimg/$image");

// $bfc=$_FILES['bfc']['name'];
// $tempname=$_FILES['bfc']['tmp_name'];
// move_uploaded_file($tempname,"dataimg/$bfc");
// // $fee=$_POST['fee'];
// $pass=$_POST['password'];

$q="select * from req_passes where firstname='$firstname'";
$r=mysqli_query($con,$q);
$num= mysqli_num_rows($r);

if($num==1)
{
	echo"<h1>PASS ALREADY ACHIEVED!!!...please wait we will redirect to paymentform within FOUR second.</h1>";
header( "refresh:4;url=PayUMoney_form.php" );
}
else
{
	$reg="insert into req_passes(amount,firstname,email,phone,productinfo) values('$amount' ,'$firstname','$email','$phone','$productinfo')";
	mysqli_query($con,$reg);
	echo"<h1>Please Wait We Will Redirect To Payment within FOUR second</h1>";
header( "refresh:2;url=https://sboxcheckout.citruspay.com/payu/checkout/1F50746894DFC554717345B3380C3CB3" );
}

?>