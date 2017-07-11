<?php
	include('database.php');
	
	$result=mysqli_query($con,"SELECT * FROM tb_history WHERE status='NEW'");
	$total=mysqli_num_rows($result);
	
	$result=mysqli_query($con,"SELECT * FROM tb_history WHERE status='CLOSED' OR status='REJECTED'");
	$managed=mysqli_num_rows($result);
	
	$result=mysqli_query($con,"SELECT * FROM tb_history WHERE status='NEW' UNION ");
?>