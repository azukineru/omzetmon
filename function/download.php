<?php
	include('database.php');
	
	$m=$_POST['m'];
	$y=$_POST['y'];
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=omzet ".$m." ".$y.".xls");
		
	$query=mysqli_query($con, "SELECT * FROM tb_history WHERE month(tanggal) = ".$m." AND year(tanggal) = ".$y."");
		
	echo '<table border="1">';
	echo '<tr>';
	echo '<td>ID</td>'; 
	echo '<td>STO</td>';
	echo '<td>Stream</td>';
	echo '<td>No Telepon</td>'; 
	echo '<td>No Internet</td>'; 
	echo '<td>QR Code</td>'; 
	echo '<td>Data Lama</td>'; 
	echo '<td>Data Baru</td>'; 
	echo '<td>Status</td>'; 
	echo '<td>Keterangan</td>'; 
	echo '<td>Tanggal</td>'; 
	echo '<td>Issuer</td>'; 
	echo '<td>Followup</td>'; 
	echo '</tr>';
	while ($row = mysqli_fetch_array($query)){

		$isquery=mysqli_query($con, "SELECT fname FROM tb_account WHERE email='".$row['issuer']."'");
		$isrow=mysqli_fetch_assoc($isquery);
					
		$fuquery=mysqli_query($con, "SELECT fname FROM tb_account WHERE email='".$row['followup']."'");
		$furow=mysqli_fetch_assoc($fuquery);
					
		echo '<tr>';
			echo '<td>'.$row['id'].'</td>'; 
			echo '<td>'.$row['sto'].'</td>'; 
			echo '<td>'.$row['stream'].'</td>';
			echo '<td>'.$row['no_telp'].'</td>'; 
			echo '<td>'.$row['no_internet'].'</td>'; 
			echo '<td>'.$row['qr'].'</td>'; 
			echo '<td>'.$row['data_lama'].'</td>'; 
			echo '<td>'.$row['data_baru'].'</td>'; 
			echo '<td>'.$row['status'].'</td>'; 
			echo '<td>'.$row['keterangan'].'</td>'; 
			echo '<td>'.$row['tanggal'].'</td>'; 
			echo '<td>'.$isrow['fname'].'</td>'; 
			echo '<td>'.$furow['fname'].'</td>';    
		echo '</tr>';  
	}
	echo '</table>';
?>