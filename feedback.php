 <?php 
error_reporting(0);


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'bus-app');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
 $reg="insert into feedback(name,email,subject,message) values('$name','$email','$subject','$message')";
if (mysqli_query($con,$reg))
{
echo"<h1>FEEDBACK SEND SUCCESSFULLY...please wait..</h1>";
header( "refresh:2;url=index.php" );   
}

?>