<?php
	if (isset($_GET['approveAcc'])) {
		approveAcc($_GET['email']);
	} else {
		rejectAcc($_GET['email']);
	}
	
	function approveAcc($email){
		include('database.php');
		
		$query=mysqli_query($con,"SELECT * FROM tb_unsigned WHERE email='".$email."'");
		$row=mysqli_fetch_assoc($query);
		
		$query="INSERT INTO tb_account (email, password, fname, lname, phone, acctype, sto)
				VALUES ('".$row['email']."','".$row['password']."','".$row['fname']."','".$row['lname']."','".$row['phone']."','".$row['acctype']."','".$row['sto']."')";
				
		if ($con->query($query) == TRUE){
			$query="DELETE FROM tb_unsigned WHERE email='".$row['email']."'";
			$con->query($query);
			
			echo
			'<script>
				alert("Account has been approved for registration");
				window.location.href = "../admin_member.php";
			</script>';
		}
	}
	
	function rejectAcc($email){
		include('database.php');
		
		$query="DELETE FROM tb_unsigned WHERE email='".$email."'";
				
		if ($con->query($query) == TRUE){
			echo
			'<script>
				alert("Account rejected");
				window.location.href = "../admin_member.php";
			</script>';
		}
	}
?>