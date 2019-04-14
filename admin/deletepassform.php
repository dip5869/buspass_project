<?php 
	
		include('../dbcon.php');
		
		$id=$_REQUEST['sid'];

		$qry="DELETE FROM `passes` WHERE `id`='$id'";

		if(mysqli_query($con,$qry))
		{
			?>
			<script>
				alert('Pass Deleted successfully');
			window.open('deletepass.php','_self');


			</script>
			<?php
		}
		else
		{
			echo"pass not Deleted";
		}
	

 ?>



 