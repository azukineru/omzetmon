<?php	

	function insertData($opt, $notelp, $noint, $qr, $datalama, $databaru, $keterangan, $issuer){
		include('database.php');
		
		switch ($opt){
			case 1:
				$id=uniqid('r1');
				$tb='tb_pa';
				$href='insert_pa.php';
				break;
			case 2:
				$id=uniqid('r2');
				$tb='tb_pos';
				$href='insert_pos.php';
				break;
			case 3:
				$id=uniqid('r3');
				$tb='tb_dpodp';
				$href='insert_odp.php';
				break;
			default:
		}
		
		$query="INSERT INTO ".$tb." (id, no_telp, no_internet, qr, data_lama, data_baru, status, keterangan, issuer)
				VALUES ('".$id."', '".$notelp."', '".$noint."', '".$qr."', '".$datalama."', '".$databaru."', 'NEW', '".$keterangan."', '".$issuer."')";
		
		if ($con->query($query) == TRUE) { 
				
			$query="INSERT INTO tb_history (id, no_telp, no_internet, qr, data_lama, data_baru, status, keterangan, issuer)
					VALUES ('".$id."', '".$notelp."', '".$noint."', '".$qr."', '".$datalama."', '".$databaru."', 'NEW', '".$keterangan."', '".$issuer."')";
					
			$con->query($query);
			
			echo
			'<script>
				alert("Data is successfully saved with ID : '.$id.'");
				window.location.href = "'.$href.'";
			</script>';
		} else {
			echo 
			'<script>
				alert("'.$con->error.'");
			</script>';
		}
	}
	
	function viewData($opt){
		include('database.php');
		
		switch ($opt){
			case 1:
				$tb='tb_pa';
				break;
			case 2:
				$tb='tb_pos';
				break;
			case 3:
				$tb='tb_dpodp';
				break;
			case 4:
				$tb='tb_history';
				break;
			default:
		}
		
		if($opt==1 || $opt==2 || $opt==3){		
			$query=mysqli_query($con, "SELECT * FROM ".$tb);
		}
		else{
			$query=mysqli_query($con, "SELECT * FROM `tb_history` ORDER BY `tb_history`.`tanggal` DESC ");
		}
					
		if(mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)){
				if($opt==4){
					if($row['status']=="CLOSED"){
						echo '<tr style="background-color:#80ff80">';
					}elseif($row['status']=="REJECTED"){
						echo '<tr style="background-color:#ff9999">';
					}else{
						echo '<tr>';
					}
					echo 
					'<td>'.$row['id'].'</td>
					 <td>'.$row['no_telp'].'</td>
					 <td>'.$row['no_internet'].'</td>
					 <td>'.$row['qr'].'</td>
					 <td>'.$row['data_lama'].'</td>
					 <td>'.$row['data_baru'].'</td>
					 <td>'.$row['status'].'</td>
					 <td>'.$row['keterangan'].'</td>
					 <td>'.$row['tanggal'].'</td>
					 <td>'.$row['issuer'].'</td>
					 <td>'.$row['followup'].'</td>
					 </tr>';
				}else{
					echo 
					'<tr>
					 <td>'.$row['id'].'</td>
					 <td>'.$row['no_telp'].'</td>
					 <td>'.$row['no_internet'].'</td>
					 <td>'.$row['qr'].'</td>
					 <td>'.$row['data_lama'].'</td>
					 <td>'.$row['data_baru'].'</td>
					 <td>'.$row['status'].'</td>
					 <td>'.$row['keterangan'].'</td>
					 <td>'.$row['tanggal'].'</td>
					 <td>'.$row['issuer'].'</td>
					 <td><a href="update.php?id='.$row['id'].'">Update</a></td>
					 </tr>';
				}  
			}
		}else{
			echo 
			'<tr>
			 <td colspan="10" style="text-align:center">There is no data at the moment.</td>
			 </tr>';
		}
	}
	
	function updateData($id,$followup){
		include('database.php');
		
		switch ($id[1]){
			case '1':
				$tb='tb_pa';
				$href='monitor_pa.php';
				break;
			case '2':
				$tb='tb_pos';
				$href='monitor_pos.php';
				break;
			case '3':
				$tb='tb_dpodp';
				$href='monitor_odp.php';
				break;
			default:
		}
		
		$query=mysqli_query($con, "SELECT * FROM ".$tb." WHERE id='".$id."'");
		$row = mysqli_fetch_array($query);
		
		echo
		'<form action="" method="post">
            <div class="row">
			  <div class="medium-6">
                <h4>id : '.$row['id'].'</h4>
              </div>
			  <div class="medium-6">
				<h4>issuer : '.$row['issuer'].'</h4>
              </div>
              <div class="medium-6">
                <label>No. Telepon
                  <input type="text" name="no_telp" value="'.$row['no_telp'].'"disabled>
                </label>
              </div>
              <div class="medium-6">
                <label>No. Internet
                  <input type="text" name="no_internet" value="'.$row['no_internet'].'"disabled>
                </label>
              </div>
              <div class="medium-6">
                <label>QR Code
                  <input type="text" name="qr" value="'.$row['qr'].'"disabled>
                </label>
              </div>
              <div class="medium-6">
                <label>Data Lama
                  <input type="text" name="data_lama" value="'.$row['data_lama'].'"disabled>
                </label>
              </div>
              <div class="medium-6">
                <label>Data Baru
                  <input type="text" name="data_baru" value="'.$row['data_baru'].'"disabled>
                </label>
              </div>
              <div class="medium-6">
                <label>Keterangan
                  <input type="text" name="keterangan" value="'.$row['keterangan'].'">
                </label>
              </div>
			  <div class="medium-6">
                <label>Status
					<select name="status">
					  <option value="CLOSED">CLOSED</option>
					  <option value="REJECTED">REJECTED</option>
					</select>
                </label>
              </div>
              <button type="submit" class="button large" name="update">Update</button>
            </div>            
          </form>';
		  
		if (isset($_POST["update"])) { 
			$query="INSERT INTO tb_history (id, no_telp, no_internet, qr, data_lama, data_baru, status, keterangan, issuer, followup)
					VALUES ('".$row['id']."', '".$row['no_telp']."', '".$row['no_internet']."', '".$row['qr']."', '".$row['data_lama']."', '".$row['data_baru']."', '".$_POST['status']."', '".$_POST['keterangan']."', '".$row['issuer']."', '".$followup."')";
		
			if ($con->query($query) == TRUE){

				$query="DELETE FROM ".$tb." WHERE id='".$row['id']."'";
				
				$con->query($query);
				
				echo
					'<script>
						alert("Data '.$id.' is successfully updated.");
						window.location.href = "'.$href.'";
					</script>';
			} else {
				echo 
				'<script>
					alert("'.$con->error.'");
				</script>';
			}		
        }
	}
?>