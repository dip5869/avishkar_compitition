








      <?php 
	
		        $name=$_POST['user'];
			$pass=$_POST['password'];
	$con=pg_connect("user=postgres dbname=bus_app") or die("error");

        $qry="select * from student where name='$name' and password='$pass'";

        $run=pg_query($con,$qry);

        $row=pg_fetch_assoc($run);
			
    	if($row>1)
	{		

			session_start();
			$_SESSION['username']=$name;
			
			header('location:home.php');
	}
	else
	{
	 ?>
	      <script>
		alert('USERNAME OR PASSWORD NOT MATCHED...!!');
		window.open('index.php','_self');
	      </script>
        <?php
	}


 ?>   
