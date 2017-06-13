<?php
include('function/session.php');
include('function/omom.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OMOM | Inserting Data OMZET DP/ODP</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/pace.css" />
  <link rel="stylesheet" type="text/css" href="font/foundation-icons.css" />
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
</head>
<body>

  <div class="off-canvas-wrapper">
    <div class="large-12 bg-black">
      <div class="row small-3 small-offset-9 show-for-large">
        <h5>Hi, <a href="profile.php"><?php echo $login_fname; ?></a> | <a href="settings.php">Settings</a> | <a href="function/logout.php">Log out</a></h5>
      </div>
      <div class="row small-12 hide-for-large">
        <h5>Hi, <a href="profile.php"><?php echo $login_fname; ?></a> | <a href="settings.php">Settings</a> | <a href="function/logout.php">Log out</a></h5>
      </div>
    </div>
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
        <div class="medium-12">
          <br>
          <div class="row medium-8">
            <img class="thumbnail" src="image/omzet.jpg">
          </div>
          <a href="dashboard.php"><h5 style="color:white"><center>OMZET Online Monitoring System</center></h5></a>
          <div class="row small-12">
            <ul class="multilevel-accordion-menu vertical menu" data-accordion-menu>
              <li>
                <a href="#">Monitoring Data</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="monitor_pa.php">Data OMZET Perangkat Aktif</a></li>
                  <li><a class="subitem" href="monitor_pos.php">Data OMZET Primer / Sekunder</a></li>
                  <li><a class="subitem" href="monitor_odp.php">Data OMZET DP/ODP</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Inserting Data</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="insert_pa.php">Data OMZET Perangkat Aktif</a></li>
                  <li><a class="subitem" href="insert_pos.php">Data OMZET Primer / Sekunder</a></li>
                  <li><a class="subitem" href="insert_odp.php">Data OMZET DP/ODP</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Activity History</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="history.php">See Activity History</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Admin Management</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="admin_member.php">Member Approval</a>
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
            <h2>Inserting Data OMZET DP/ODP</h2>
          </div>
        </div>
        <div class="row large-12">
          <div class="inner">
            <form action="" method="post">
              <div class="row">
                <div class="medium-6">
                  <label>Select STO
                    <select name="sto">
                      <option value="JHR">JHR</option>
                      <option value="GNK">GNK</option>
                      <option value="SMT">SMT</option>
                      <option value="BOJ">BOJ</option>
                      <option value="MJE">MJE</option>
                      <option value="MKG">MKG</option>
                      <option value="SSL">SSL</option>
                      <option value="MJP">MJP</option>
                      <option value="BMK">BMK</option>
                      <option value="SMC">SMC</option>
                      <option value="ABR">ABR</option>
                      <option value="BDN">BDN</option>
                      <option value="UNR">UNR</option>
                      <option value="KDL">KDL</option>
                      <option value="PUS">PUS</option>
                      <option value="SKR">SKR</option>
                    </select>
                  </label>
                </div>
                <div class="medium-6">
                  <label>No. Telepon
                    <input type="text" name="no_telp" value="<?php echo isset($_POST['no_telp']) ? $_POST['no_telp'] : '' ?>" >
                  </label>
                </div>
                <div class="medium-6">
                  <label>No. Internet
                    <input type="text" name="no_internet" value="<?php echo isset($_POST['no_internet']) ? $_POST['no_internet'] : '' ?>" >
                  </label>
                </div>
                <div class="medium-6">
                  <label>QR Code
                    <input type="text" name="qr" value="<?php echo isset($_POST['qr']) ? $_POST['qr'] : '' ?>" required>
                  </label>
                </div>
                <div class="medium-6">
                  <label>Data Lama
                    <input type="text" name="data_lama" value="<?php echo isset($_POST['data_lama']) ? $_POST['data_lama'] : '' ?>" required>
                  </label>
                </div>
                <div class="medium-6">
                  <label>Data Baru
                    <input type="text" name="data_baru" value="<?php echo isset($_POST['data_baru']) ? $_POST['data_baru'] : '' ?>" required>
                  </label>
                </div>
                <div class="medium-6">
                  <label>Keterangan
                    <input type="text" name="keterangan" value="<?php echo isset($_POST['keterangan']) ? $_POST['keterangan'] : '' ?>">
                  </label>
                </div>
                <button type="submit" class="button large" name="save">Save</button>
              </div>            
            </form>
          </div>

          <?php     
          if (isset($_POST["save"])) {
           if((isset($_POST['no_telp']) && ctype_digit($_POST['no_telp'])) || (isset($_POST['no_internet']) && ctype_digit($_POST['no_internet']))){
            insertData(3,$_POST['sto'],$_POST['no_telp'],$_POST['no_internet'],$_POST['qr'],$_POST['data_lama'],$_POST['data_baru'],$_POST['keterangan'],$_SESSION['login_user']);
          }else{
            echo
            '<script>
            alert("Nomor Telepon atau Nomor Internet Salah");
          </script>';
        }
      }
      ?> 
    </div>
  </div>
</div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/vendor/pace.min.js"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>


