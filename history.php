<?php
include('session.php');
include('omom.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mo-Z | OMZET Activity History</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" type="text/css" href="font/foundation-icons.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
</head>
<body>

  <div class="off-canvas-wrapper">
    <div class="large-12">
      <div class="row small-2 small-offset-10 show-for-large">
        <h4>Hi, <?php echo $_SESSION['login_user']; ?> | <a href="logout.php">Log out</a></h4>
      </div>
      <div class="row small-6 small-offset-6 hide-for-large">
        <h4>Hi, <?php echo $_SESSION['login_user']; ?> | <a href="logout.php">Log out</a></h4>
      </div>
    </div>
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
        <div class="medium-12">
          <br>
          <img class="thumbnail" src="http://placehold.it/550x350">
          <a href="dashboard.php"><h5><center>Mo-Z Monitoring OMZET</center></h5></a>
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
            <h2>Activity History</h2>
          </div>
        </div>
        <div class="row small-up-2 medium-up-3 large-up-4">
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>No. Telp</th>
                <th>No. Internet</th>
                <th>QR</th>
                <th>Data Lama</th>
                <th>Data Baru</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Issuer</th>
                <th>Followup</th>
              </tr>
            </thead>
            <tbody>
              <?php
              viewData(4);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>

