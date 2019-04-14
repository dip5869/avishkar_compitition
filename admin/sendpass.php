<?php 
//error_reporting(0);

		include('../dbcon.php');
		$name=$_POST['user'];
		$gender=$_POST['gender'];
		$collge=$_POST['collge'];
		$route=$_POST['route'];
		$class=$_POST['class'];
		$dob=$_POST['dob'];
		$fee=$_POST['fee'];

	 $qry="INSERT INTO sended_passes (name,gender,collge,route,class, dob,fee) VALUES ('$name','$gender','$collge','$route','$class','$dob','$fee')";
		

		if(pg_query($con,$qry))
		{
		?>
		      <script>
			alert('PASS SEND SUCCESSFULLY.');
			window.open('admindash.php');
		      </script>
		<?php

		}
		else
		{
			echo"PASS NOT SEND";
		}
	
 ?>
