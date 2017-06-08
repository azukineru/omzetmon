<?php
	include('session.php');
	include('omom.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OM-OMS | Inserting Data OMZET Primer/Sekunder</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>

  <div class="off-canvas-wrapper">
    <div class="row large-12">
      <h4>Profile</h4>
    </div>
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
        <div class="row column">
          <br>
          <img class="thumbnail" src="http://placehold.it/550x350">
          <a href="dashboard.php"><h5><center>OMZET Online Monitoring System</center></h5></a>
          <div class="row small-12">
            <ul class="multilevel-accordion-menu vertical menu" data-accordion-menu>
              <li>
                <a href="#">Monitoring Data</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="monitor_pa.php">Data OMZET Perangkat Aktif</a></li>
                  <li><a class="subitem" href="monitor_pos.php">Data OMZET Primer/Sekunder</a></li>
                  <li><a class="subitem" href="monitor_odp.php">Data OMZET DP/ODP</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Inserting Data</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="insert_pa.php">Data OMZET Perangkat Aktif</a></li>
                  <li><a class="subitem" href="insert_pos.php">Data OMZET Primer/Sekunder</a></li>
                  <li><a class="subitem" href="insert_odp.php">Data OMZET DP/ODP</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Activity History</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="history.php">See Activity History</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="off-canvas-content" data-off-canvas-content>
        <div class="title-bar hide-for-large">
          <div class="title-bar-left">
            <button class="menu-icon" type="button" data-open="my-info"></button>
            <a href="dashboard.php"><span class="title-bar-title">OMZET Online Monitoring System</span></a>
          </div>
        </div>
        <div class="callout primary">
          <div class="row column">
            <h2>Inserting Data OMZET Primer/Sekunder</h2>
          </div>
        </div>
        <div class="row large-12">
          <form action="" method="post">
            <div class="row">
              <div class="medium-6">
                <label>No. Telepon
                  <input type="text" name="no_telp" required>
                </label>
              </div>
              <div class="medium-6">
                <label>No. Internet
                  <input type="text" name="no_internet" required>
                </label>
              </div>
              <div class="medium-6">
                <label>QR Code
                  <input type="text" name="qr" required>
                </label>
              </div>
              <div class="medium-6">
                <label>Data Lama
                  <input type="text" name="data_lama" required>
                </label>
              </div>
              <div class="medium-6">
                <label>Data Baru
                  <input type="text" name="data_baru" required>
                </label>
              </div>
              <div class="medium-6">
                <label>Keterangan
                  <input type="text" name="keterangan">
                </label>
              </div>
              <button type="submit" class="success button large" name="save">Save</button>
            </div>            
          </form>
			<?php     
                if (isset($_POST["save"])) { 
					insertData(2,$_POST['no_telp'],$_POST['no_internet'],$_POST['qr'],$_POST['data_lama'],$_POST['data_baru'],$_POST['keterangan'],$_SESSION['login_user']);
                }
			?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>


