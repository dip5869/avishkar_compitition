<?php 


		include('../dbcon.php');
		$route=$_POST['route'];
		$fee=$_POST['fee'];
		$id=$_POST['sid'];

		$qry="update  passes set  route =  '$route',
		fee =  '$fee'
		 where id ='$id'";


		if(pg_query($con,$qry))
		{
			?>
			<script>
				alert('ROUTE UPDATE SUCCESSFULLY.');
			window.open('updatepassform.php? sid=<?php echo $id;?>','_self');


			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert('ROUTE NOT UPDATE..!!');
			window.open('updatepassform.php? sid=<?php echo $id;?>','_self');


			</script>
			<?php
		}
	


 ?>
