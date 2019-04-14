<?php 



	function showdetails($name,$collge,$route,$class,$age,$fee)
	{
		include('dbcon.php');

		$sql="SELECT * FROM sended_passes WHERE name LIKE '%$name%' AND route LIKE '%$route%'";

		$run=pg_query($con,$sql);

		if(pg_num_rows($run)>0)
		{
			$data=pg_fetch_assoc($run);
			?>

				<table border="1" width="auto" align="center">
					<tr style="background-color:black;">
						<th colspan="3" style="color:white;font-size:25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pass Details</th>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:25px;">NAME</th>
						<td style="color:black;font-size:25px;font-weight: bold;"><?php echo $data['name']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:25px;">GENDER</th>
						<td style="color:black;font-size:25px;font-weight: bold;"><?php echo $data['gender']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:25px;">COLLEGE</th>
						<td style="color:black;font-size:25px;font-weight: bold;"><?php echo $data['collge']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:25px;">ROUTE</th>
						<td style="color:black;font-size:25px;font-weight: bold;"><?php echo $data['route']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:25px;">CLASS</th>
						<td style="color:black;font-size:25px;font-weight: bold;"><?php echo $data['class']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:25px;">DATE OF BIRTH</th>
						<td style="color:black;font-size:25px;font-weight: bold;"><?php echo $data['dob']; ?></td>
					</tr>
					<tr style="background-color:cyan;">
						<th style="color:black;font-size:25px;">FEE</th>
						<td style="color:red;font-size:25px;font-weight: bold;"><?php echo $data['fee']; ?></td>
					</tr>
					<tr style="background-color:cyan;"align="right">
						<th colspan="2"><a href="PayUMoney_form.php"><button type="submit" name="submit" class="btn btn-outline-primary"> <h4 style="color:white;height:10px;">BUY-PASS</h4></button>
  </a></th>
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

