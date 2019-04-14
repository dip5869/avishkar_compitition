<?php 



	function viewgivenpassdetails($name,$collge,$route,$class,$age,$fee,$passid,$attested,$validity)
	{
		include('dbcon.php');

		$sql="SELECT * FROM given_passes WHERE user LIKE '%$name%' AND route LIKE '%$route%'";

		$run=pg_query($con,$sql);

		if(pg_num_rows($run)>0)
		{
			$data=pg_fetch_assoc($run);
			?>

				<table border="1" width="auto" align="center" height="auto">
					<tr style="background-color:black;">
						<th colspan="3" style="color:white;font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MSRTC STUDENT BUS-PASS</th>
					</tr>
					
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">PASS_ID</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['passid']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">NAME</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['name']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">GENDER</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['gender']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">COLLEGE</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['collge']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">ROUTE</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['route']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">CLASS</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['class']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">DATE OF BIRTH</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['dob']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">FEE</th>
						<td style="color:red;font-size:15px;font-weight: bold;"><?php echo $data['fee']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">VALID TILL</th>
						<td style="color:red;font-size:15px;font-weight: bold;"><?php echo $data['validity']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:15px;">ATTESTED_BY</th>
						<td style="color:black;font-size:15px;font-weight: bold;"><?php echo $data['attested']; ?></td>
					</tr>				
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

