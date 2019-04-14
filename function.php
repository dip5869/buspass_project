<?php 

	function showdetails($route,$fee)
	{
		include('dbcon.php');

		$sql="SELECT * FROM `passes` WHERE `route` LIKE '%$route%' AND `fee` LIKE '%$fee%'";

		$run=mysqli_query($con,$sql);

		if(mysqli_num_rows($run)>0)
		{
			$data=mysqli_fetch_assoc($run);
			?>
				<table border="1" align="center" width="auto">
					<tr align="center">
						<th colspan="3" style="color:white;font-size:35px;background-color:black;">AVAILABLE PASS DETAILS</th>
					</tr>
					<tr>
						<th style="font-size:35px;background-color:silver; color:black"><i>Route</i></th>
						<td style="font-size:35px;font-weight: bold;background-color:silver;color:black"><?php echo $data['route']; ?></td>
					</tr>
					<tr>
						<th style="font-size:35px;background-color:silver;color:black"><i>fee</i></th>
						<td style="color:red;font-size:35px;font-weight: bold;background-color:silver;"><?php echo $data['fee']; ?></td>
					</tr>
				</table>
			<?php
		}
		else
		{
			echo "<script>alert('NO Pass Found.');</script>";
		}
	}
 ?>

