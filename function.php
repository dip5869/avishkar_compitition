<?php 

	function showdetails($route,$fee)
	{
		include('dbcon.php');

		$sql="select * from passes where route='$route'";

		$run=pg_query($con,$sql);

		if(pg_num_rows($run)>0)
		{
			$data=pg_fetch_assoc($run);
			?>
				<table border="1" align="center" width="auto">
					<tr align="center">							
						<th colspan="3" style="color:white;font-size:35px;background-color:#444;padding:10px;">AVAILABLE PASS DETAILS</th>
					</tr>
					<tr>
						<th style="font-size:25px;background-color:#fff; color:black;padding:10px;"><i>Route</i></th>
						<td style="font-size:25px;font-weight: bold;background-color:#fff;color:black;padding:10px;"><?php echo $data['route']; ?></td>
					</tr>
					<tr>
						<th style="font-size:25px;background-color:#fff;color:black;padding:10px;"><i>fee</i></th>
						<td style="color:red;font-size:35px;font-weight: bold;background-color:#fff;padding:10px;"><?php echo $data['fee']; ?></td>
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


