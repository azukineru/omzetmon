<?php
	include('database.php');
	
	session_start();
	
	$user_email=$_SESSION['login_user'];
	
	$query=mysqli_query($con, "SELECT * FROM tb_account WHERE email='".$user_email."'");
	$row=mysqli_fetch_assoc($query);
	
	$login_fname=$row['fname'];
	$login_lname=$row['lname'];
	$login_email=$row['email'];
	$login_phone=$row['phone'];
	$login_acctype=$row['acctype'];
	$login_sto=$row['sto'];
	
	if(!isset($_SESSION['login_user'])){
    	header("Location: index.php");
  	}
?>