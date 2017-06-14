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
	echo '<td>No Telp</td>'; 
	echo '<td>No Internet</td>'; 
	echo '<td>QR Code</td>'; 
	echo '<td>Data Lama</td>'; 
	echo '<td>Data Baru</td>'; 
	echo '<td>Status</td>'; 
	echo '<td>Keterangan</td>'; 
	echo '<td>Tanggal</td>'; 
	echo '<td>Issuer</td>'; 
	echo '<td>FollowUp</td>'; 
	echo '</tr>';
	while ($row = mysqli_fetch_array($query)){ 
		echo '<tr>';
			echo '<td>'.$row['id'].'</td>'; 
			echo '<td>'.$row['sto'].'</td>'; 
			echo '<td>'.$row['no_telp'].'</td>'; 
			echo '<td>'.$row['no_internet'].'</td>'; 
			echo '<td>'.$row['qr'].'</td>'; 
			echo '<td>'.$row['data_lama'].'</td>'; 
			echo '<td>'.$row['data_baru'].'</td>'; 
			echo '<td>'.$row['status'].'</td>'; 
			echo '<td>'.$row['keterangan'].'</td>'; 
			echo '<td>'.$row['tanggal'].'</td>'; 
			echo '<td>'.$row['issuer'].'</td>'; 
			echo '<td>'.$row['followup'].'</td>';    
		echo '</tr>';  
	}
	echo '</table>';
?>