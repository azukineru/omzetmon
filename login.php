<?php
	include(database.php);

	session_start();
	$error='';
	
	if(isset($_POST['login'])){
		if(empty($_POST['username'])||empty($_POST['password'])){
			$error="Username and Password is required to log in";
		}else{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$username=stripslashes($username);
			$password=stripslashes($password);
			$username=mysqli_real_escape_string($con, $username);
			$password=md5(mysqli_real_escape_string($con, $password));
			
			
			
			$query=mysqli_query($con, "SELECT * FROM account WHERE username='$username' AND password='$password'");
			
			if(mysqli_num_rows($query)==1){
				$_SESSION['login_user']=$username;
				header("Location:dashboard.html");
			}else{
				$error="Username or Password is invalid";
			}
			mysqli_close($con);
		}	
	}
?>