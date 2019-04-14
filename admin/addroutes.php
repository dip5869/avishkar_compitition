<?php
  	    include('../dbcon.php');

	 	    $route=$_POST['route'];
		    $fee=$_POST['fee'];
		$q="select * from passes where route='$route'";
		$run=pg_query($con,$q);
		$num=  pg_num_rows($run);

	if($num==1)
	{
		?>
		      <script>
			alert('ROUTE ALREADY ADDED...!!');
			window.open('addpass.php','_self');
		      </script>
		<?php
	}
	else
	{
		$reg="insert into passes(route,fee) values('$route','$fee')";
		pg_query($con,$reg);
		?>
		      <script>
			alert('ROUTE ADDED SUCCESSFULLY...!!');
			window.open('addpass.php','_self');
		      </script>
		<?php
	}


?>






