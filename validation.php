<?php 

error_reporting(0);
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'bus-app');


// if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response'])
// {
//        // var_dump($_POST);
//         $secret = "6LcOrYUUAAAAAMZ3CIG9cC3i1_E7gPJ77A6yGbOF";
//         $ip = $_SERVER['REMOTE_ADDR'];
//         $captcha = $_POST['g-recaptcha-response'];
//         $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
//         //var_dump($rsp);
//         $arr = json_decode($rsp,TRUE);
//         if($arr['success'])
      $name=$_POST['user'];
			$pass=$_POST['password'];

			$q="select * from student where name='$name' && password='$pass'";
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
				header('location:index.php #services');

			}
             
        
     //    else
     //    {
     //      echo 'SPam';

	    // }

 ?>