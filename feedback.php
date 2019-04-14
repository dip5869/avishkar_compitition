 <?php 
error_reporting(0);


  include('dbcon.php');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
 $reg="insert into feedback(name,email,subject,message) values('$name','$email','$subject','$message')";
if (pg_query($con,$reg))
{
?>
		      <script>
			alert('FEEDBACK SEND SUCCESSFULLY.');
			window.open('index.php');
		      </script>
		<?php
}

?>
