<?php 

	function viewgivenpassdetails($image,$name,$collge,$route,$class,$age,$fee,$passid,$attested,$validity)
	{
		include('dbcon.php');

		$sql="SELECT * FROM `given_passes` WHERE `user` LIKE '%$name%' AND `route` LIKE '%$route%'";

		$run=mysqli_query($con,$sql);

		if(mysqli_num_rows($run)>0)
		{
			$data=mysqli_fetch_assoc($run);
			?>

				<table border="1" width="auto" align="center" height="auto">
					<tr style="background-color:black;">
						<th colspan="3" style="color:white;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MSRTC STUDENT BUS-PASS</th>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">IMAGE</th>
     				   <td> <img src="dataimg1/<?php echo $data['image']; ?>" style="height:100px;width:100px;"></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">PASS_ID</th>
						<td style="color:black;font-size:20px;font-weight: bold;"><?php echo $data['passid']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">NAME</th>
						<td style="color:black;font-size:20px;font-weight: bold;"><?php echo $data['user']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">COLLEGE</th>
						<td style="color:black;font-size:20px;font-weight: bold;"><?php echo $data['collge']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">ROUTE</th>
						<td style="color:black;font-size:20px;font-weight: bold;"><?php echo $data['route']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">CLASS</th>
						<td style="color:black;font-size:20px;font-weight: bold;"><?php echo $data['class']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">DATE OF BIRTH</th>
						<td style="color:black;font-size:20px;font-weight: bold;"><?php echo $data['dob']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">FEE</th>
						<td style="color:red;font-size:20px;font-weight: bold;"><?php echo $data['fee']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">VALID TILL</th>
						<td style="color:red;font-size:20px;font-weight: bold;"><?php echo $data['validity']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:20px;">ATTESTED_BY</th>
						<td style="color:black;font-size:20px;font-weight: bold;"><?php echo $data['attested']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
			<th colspan="2"><button onclick="myFunction()" class="btn btn-outline-primary"style="width:100%;"> PRINT-PASS</button>
  			<script>
				function myFunction() 
				{
				  window.print();
				}
			</script>
  </th>					</tr>


				</table>
			<?php
		}
		else
		{
			 ?>
      <script>
        alert('NO PASS TAKEN BY YOU.');
      </script>
      <?php
			header( "refresh:4;url=home.php" );
		}
	}
 ?>

