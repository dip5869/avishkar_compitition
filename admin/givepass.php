<?php 
//error_reporting(0);

		include('../dbcon.php');
		//$image=$_FILES['image']['name'];
//$tempname=$_FILES['image']['tmp_name'];
//move_uploaded_file($tempname,"../dataimg1/$image");
		$name=$_POST['user'];
		$gender=$_POST['gender'];
		$collge=$_POST['collge'];
		$route=$_POST['route'];
		$class=$_POST['class'];
		$dob=$_POST['dob'];
		$fee=$_POST['fee'];
		$passid=$_POST['passid'];
		$attested=$_POST['attested'];
		$validity=$_POST['validity'];

		 $qry="INSERT INTO given_passes (name,gender, collge, route, class, dob,fee,passid,attested,validity) VALUES ('$name','$gender','$collge','$route','$class','$dob','$fee','$passid','$attested','$validity')";
		
				//$run = pg_query($con,$qry);

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
