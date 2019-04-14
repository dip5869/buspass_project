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

 ?>
<div class="list-group">
  <a href="admindash.php"  class="list-group-item list-group-item-action active">
  	<h1 align="center">ADMIN DASHBOARD <h2 align="right" ><a href="logout.php" ><button type="button" class="btn btn-danger">LOGOUT</button></a></h2></h1>
  </a>
  <a href="addpass.php" class="list-group-item list-group-item-action"><h5 align="center">INSERT PASS</h5>
  </a>
  <a href="updatepass.php" class="list-group-item list-group-item-action disabled"><h5 align="center">UPDATE PASS</h5>
  </a>
  <a href="deletepass.php" class="list-group-item list-group-item-action disabled"><h5 align="center">DELETE PASS</h5>
  </a>
  <a href="view_reg_stud.php" class="list-group-item list-group-item-action disabled"><h5 align="center">VIEW REGISTRED STUDENTS</h3>
  </a>
  <a href="view_req_passes.php" class="list-group-item list-group-item-action disabled"><h5 align="center">VIEW REQUESTED PASSES</h5>
  </a>
</div>
</div>
 </body>
 </html>