<?php	

	function insertData($opt, $sto, $notelp, $noint, $qr, $datalama, $databaru, $keterangan, $issuer){
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
		
		$query="INSERT INTO ".$tb." (id, sto, no_telp, no_internet, qr, data_lama, data_baru, status, keterangan, issuer)
				VALUES ('".$id."', '".$sto."', '".$notelp."', '".$noint."', '".$qr."', '".$datalama."', '".$databaru."', 'NEW', '".$keterangan."', '".$issuer."')";
		
		if ($con->query($query) == TRUE) { 
				
			$query="INSERT INTO tb_history (id, sto, no_telp, no_internet, qr, data_lama, data_baru, status, keterangan, issuer)
					VALUES ('".$id."', '".$sto."', '".$notelp."', '".$noint."', '".$qr."', '".$datalama."', '".$databaru."', 'NEW', '".$keterangan."', '".$issuer."')";
					
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
	
	function viewData($opt,$acctype){
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
						echo '<tr style="background-color:#daf6ff">';
					}elseif($row['status']=="REJECTED"){
						echo '<tr style="background-color:#ff9999">';
					}else{
						echo '<tr>';
					}
					$isquery=mysqli_query($con, "SELECT fname FROM tb_account WHERE email='".$row['issuer']."'");
					$isrow=mysqli_fetch_assoc($isquery);
					
					$fuquery=mysqli_query($con, "SELECT fname FROM tb_account WHERE email='".$row['followup']."'");
					$furow=mysqli_fetch_assoc($fuquery);																			  
					echo 
					'<td>'.$row['id'].'</td>
					 <td>'.$row['sto'].'</td>
					 <td>'.$row['no_telp'].'</td>
					 <td>'.$row['no_internet'].'</td>
					 <td>'.$row['qr'].'</td>
					 <td>'.$row['data_lama'].'</td>
					 <td>'.$row['data_baru'].'</td>
					 <td>'.$row['status'].'</td>
					 <td>'.$row['keterangan'].'</td>
					 <td>'.$row['tanggal'].'</td>
					 <td><a href="profile.php?vemail='.$row['issuer'].'">'.$isrow['fname'].'</a></td>
					 <td><a href="profile.php?vemail='.$row['followup'].'">'.$furow['fname'].'</a></td>
					 </tr>';
				}else{
					echo 
					'<tr>
					 <td>'.$row['id'].'</td>
					 <td>'.$row['sto'].'</td>
					 <td>'.$row['no_telp'].'</td>
					 <td>'.$row['no_internet'].'</td>
					 <td>'.$row['qr'].'</td>
					 <td>'.$row['data_lama'].'</td>
					 <td>'.$row['data_baru'].'</td>
					 <td>'.$row['status'].'</td>
					 <td>'.$row['keterangan'].'</td>
					 <td>'.$row['tanggal'].'</td>
					 <td><a href="profile.php?vemail='.$row['issuer'].'">'.$isrow['fname'].'</a></td>';
					 
					 if($acctype=='admin' || $acctype=='daman'){
						 echo
						'<td><a href="update.php?id='.$row['id'].'">Update</a></td>
						</tr>';
					 }else{
						 echo
						 '<td style="text-align:center">-</td>
						 </tr>';
					 }
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
	
	function signUp($email,$pass,$fname,$lname,$phone,$acctype,$sto){
		include('database.php');
		
		$row=mysqli_query($con,"SELECT email FROM tb_account WHERE email='".$email."' UNION SELECT email FROM tb_unsigned WHERE email='".$email."'");
		
		if(mysqli_num_rows($row)==1){
			echo
				'<script>
					alert("There has been and account request or registered account with your email");
					window.location.href = "registration.php";
				</script>';
			 
		}else{
			$query="INSERT INTO tb_unsigned (email, password, fname, lname, phone, acctype, sto)
					VALUES ('".$email."','".md5($pass)."','".$fname."','".$lname."','".$phone."','".$acctype."','".$sto."')";
				
			if ($con->query($query) == TRUE){
				echo
				'<script>
					alert("Your request has been sent. Please wait for admin to respond");
					window.location.href = "registration.php";
				</script>';
			}
		}
	}
	
	function updateAcc($email,$pass,$fname,$lname,$phone){
		include('database.php');
		$row=mysqli_query($con,"SELECT * FROM tb_account WHERE email='".$email."'");
		
		if(mysqli_num_rows($row)==1){
			$query="UPDATE tb_account SET password='".md5($password)."', fname='".$fname."', lname='".$lname."', phone='".$phone."'
					WHERE email='".$email."'";	
			$con->query($query);
			echo
				'<script>
					alert("Your data has been updated");
					window.location.href = "settings.php";
				</script>';
			 
		}
	}
	
	function listRequest(){
		include('database.php');
		
		$query=mysqli_query($con, "SELECT * FROM tb_unsigned");
		
		if(mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)){
				echo
				'<tr>
					<td>'.$row['email'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['phone'].'</td>
					<td>'.$row['acctype'].'</td>
					<td>'.$row['sto'].'</td>		 
					<td>
						<center>
							<a class="button" href="function/adminopt.php?approveAcc=1&email='.$row['email'].'" >Approve</a> | 
							<a class="alert button" href="function/adminopt.php?email='.$row['email'].'">Reject</a>														  
						</center>
					</td>
				</tr>';
			}
		}else{
			echo 
			'<tr>
			 <td colspan="10" style="text-align:center">There is no request at the moment.</td>
			 </tr>';
		}
	}
?>