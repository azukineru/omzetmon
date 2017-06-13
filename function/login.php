<?php
	include("database.php");

	session_start();
	$error='<br>';
	
	if(isset($_POST['login'])){
		if(empty($_POST['email'])||empty($_POST['password'])){
			$error="Email and Password is required to login";
		}else{
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$email=stripslashes($email);
			$password=stripslashes($password);
			$email=mysqli_real_escape_string($con, $email);
			$password=md5(mysqli_real_escape_string($con, $password));
			
			$query=mysqli_query($con, "SELECT * FROM tb_account WHERE email='".$email."' AND password='".$password."'");
			
			if(mysqli_num_rows($query)==1){
				$_SESSION['login_user']=$email;
				if(!empty($_POST["remember"])){
					echo '<script>window.alert("masuk");</script>';
					setcookie("member_login",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
					setcookie("member_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
				}
				else{
					if(isset($_COOKIE["member_login"])){
						setcookie("member_login","");
					}
					if(isset($_COOKIE["member_password"])){
						setcookie("member_password","");
					}
				}
				header("Location:dashboard.php");
			}else{
				$error="Email or Password is invalid";
			}
			mysqli_close($con);
		}	
	}
?>