<?php
	include('database.php');
	
	session_start();
	
	$user_email=$_SESSION['login_user'];
	
	$query=mysqli_query($con, "SELECT * FROM tb_account WHERE email='".$user_email."'");
	$row=mysqli_fetch_assoc($query);
	
	$login_name=$row['fname'];
	
	if(!isset($_SESSION['login_user'])){
    	header("Location: index.php");
  	}
?>