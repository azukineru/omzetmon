<?php
include('function/omom.php');
include('function/session.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OM-OM | Monitoring Data OMZET DP/ODP</title>

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
            <img style="margin-top: 50px;" src="image/omom.png">
          </div>
          <br>
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
              <?php
              if($login_acctype=='admin'){
               echo
               '<li>
               <a href="#">Admin Management</a>
               <ul class="menu vertical sublevel-1">
                 <li><a class="subitem" href="admin_member.php">Member Approval</a></li>
               </ul>
             </li>';
           }
           ?>
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
            <h2>Monitoring Data OMZET DP/ODP</h2>
          </div>
        </div>
        <div class="row medium-12">
          <table>
            <thead>
              <tr>
                <th>id</th>
				<th>STO</th>
                <th>No. Telp</th>
                <th>No. Internet</th>
                <th>QR Code</th>
                <th>Data Lama</th>
                <th>Data Baru</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Timestamp</th>
                <th>Issuer</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              viewData(3,$login_acctype);
              ?>
            </tbody>
          </table>
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


