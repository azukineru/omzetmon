<?php
include('function/session.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OM-OM | Bantuan</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="css/pace.css" />
  <link rel="stylesheet" type="text/css" src="font/foundation-icons.css" />
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
</head>

<body>

  <div class="off-canvas-wrapper">
    <div class="large-12 bg-black">
      <div class="row small-4 small-offset-8 show-for-large">
        <h5>Hi, <a href="profile.php"><?php echo $login_fname; ?></a> | <a href="help.php">Bantuan</a> | <a href="settings.php">Pengaturan</a> | <a href="function/logout.php">Log out</a></h5>
      </div>
      <div class="row small-12 hide-for-large">
        <h5>Hi, <a href="profile.php"><?php echo $login_fname; ?></a> | <a href="help.php">Bantuan</a> | <a href="settings.php">Pengaturan</a> | <a href="function/logout.php">Log out</a></h5>
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
                <a href="#">Monitor Data</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="monitor_pa.php">Data OMZET Perangkat Aktif</a></li>
                  <li><a class="subitem" href="monitor_pos.php">Data OMZET Primer / Sekunder</a></li>
                  <li><a class="subitem" href="monitor_odp.php">Data OMZET DP/ODP</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Masukkan Data</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="insert_pa.php">Data OMZET Perangkat Aktif</a></li>
                  <li><a class="subitem" href="insert_pos.php">Data OMZET Primer / Sekunder</a></li>
                  <li><a class="subitem" href="insert_odp.php">Data OMZET DP/ODP</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Histori Aktivitas</a>
                <ul class="menu vertical sublevel-1">
                  <li><a class="subitem" href="history.php">Lihat Histori Aktivitas</a></li>
                </ul>
              </li>
              <?php
              if($login_acctype=='admin'){
               echo
               '<li>
               <a href="#">Pengaturan Admin</a>
               <ul class="menu vertical sublevel-1">
                 <li><a class="subitem" href="admin_member.php">Persetujuan Member</a></li>
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
        <span class="title-bar-title">OMZET Online Monitoring System</span>
      </div>
    </div>
    <div class="callout primary">
      <div class="row column">
        <h1>OM-OM | Bantuan</h1>            
      </div>
    </div>
    <div class="row medium-12">
      <div class="inner">
        <h4>Pertanyaan yang mungkin anda punya</h4>
        <ol>
          <li>Apa kegunaan website ini ?</li>
          <p>
            OM-OM digunakan sebagai aplikasi ticketing OMZET dimana pada tipe user tertentu dapat melakukan request untuk pemasukan/pengubahan ODP di UIM. Selanjutnya request tersebut akan diterima dan di-follow-up oleh user lain dimana user ini akan melakukan konfirmasi bahwa request tersebut sudah valid dan bisa dimasukkan ke UIM.
          </p>
          <li>Apa saja fitur dari website ini dan bagaimana cara menggunakannya ?</li>
          <p>
            OMOM mempunyai 3 fitur utama, yaitu menambah request, memonitor serta mengupdate request, . You may access those features by clicking menu on the left side of this website.
            <ul class="help-img">
              <li>Monitoring Data OMZET</li>
              By Clicking Monitoring Data menu on the sidebar, you will see three submenus below it. These submenus is used to provide and display any OMZET data which has been inserted to the system.<br>
              <img class="thumbnail" src="image/help/3-1.jpg"><br>
              After you have clicked one of those submenus, you will see a table that contain OMZET data. HD Daman and Premium User have access to view and update those data, meanwhile Basic User only have access to view those data.<br>
              <img class="thumbnail" src="image/help/3-2.jpg">

              <li>Inserting Data OMZET</li>
              By Clicking Inserting Data menu on the sidebar, you will see three submenus below it. These submenus is used to insert any kind of OMZET data to the system.<br>
              <img class="thumbnail" src="image/help/3-3.jpg"><br>
              After you have clicked one of those submenus, you will be able to see a form. Fill out those form based on the data that you received from field technician. After you are done, click 'Save' button to submit those data to the system.<br>
              <img class="thumbnail" src="image/help/3-4.jpg">

              <li>Viewing Activity History</li>
              By Clicking this menu, you can see a table which contain all kind of activities (e.g.: Inserting data and Updating data). In this page, you could also download data summary based on month.<br>
              <img class="thumbnail" src="image/help/3-5.jpg">
            </ul>
          </p>
          <li>I am an admin, where could I manage users who have registered to this website ?</li>
          <p>
            Simply click 'Admin Management' menu on the left sidebar. After that, you will see a table which contain user(s) who have requested a registration.
          </p>
          <li>I want to change my password or my phone number, how am I supposed to do ?</li>
          <p>
            Click 'Settings' button on the top-right side, you will be able to see form. Edit the field that you want to change and click 'Save'.
          </p>
        </ol>
      </div>
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


