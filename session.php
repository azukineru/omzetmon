<?php
	include('database.php');
	
	session_start();
	
	$user_check=$_SESSION['login_user'];
	
	$query=mysqli_query($con, "SELECT username FROM tb_account WHERE username='$user_check'");
	$row=mysqli_fetch_assoc($query);
	
	$login_session=$row['username'];
	
	if(!isset($_SESSION['login_user'])){
    	header("Location: index.php");
  	}
?>