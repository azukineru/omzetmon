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
            OMOM mempunyai 3 fitur utama, yaitu menambah request, memonitor dan mengupdate request, serta melihat histori aktivitas. User dapat mengakses fitur tersebut melalui menu yang ada pada sebelah kiri.
            <ul class="help-img">
              <li>Monitor Data OMZET</li>
              Dengan memilih menu Monitor Data OMZET, anda akan melihat submenu ini.<br>
              <img class="thumbnail" src="image/help/3-1.jpg"><br>
              Setelah anda memilih salah satu submenu tersebut, anda akan melihat tabel daftar request. Hanya beberapa tipe akun saja yang memiliki akses untuk meng-update data tersebut.<br>
              <img class="thumbnail" src="image/help/3-2.jpg">

              <li>Masukkan Data OMZET</li>
              Dengan memilih menu Masukkan Data OMZET, anda akan melihat submenu ini.<br>
              <img class="thumbnail" src="image/help/3-3.jpg"><br>
              Setelah memilih salah satu submenu tersebut, anda akan melihat sebuah form. Isilah form tersebut berdasarkan data yang anda terima dari teknisi lapangan. Setelah selesai, tekan tombol 'Simpan' untuk memproses data tersebut ke sistem.<br>
              <img class="thumbnail" src="image/help/3-4.jpg">

              <li>Lihat Histori Aktivitas</li>
              Dengan memilih menu ini, anda akan melihat tabel yang berisi bermacam-macam aktivitas ( seperti: pemasukan data atau update data ). Pada halaman ini anda juga bisa mengunduh rekap data berdasarkan bulan.<br>
              <img class="thumbnail" src="image/help/3-5.jpg">
            </ul>
          </p>
          <li>Saya adalah admin, dimana saya dapat mengatur user yang telah mencoba mendaftar ke website ini ?</li>
          <p>
            Pilih menu Pengaturan Admin pada menu sebelah kiri. Setelah itu, anda akan melihat tabel yang berisi daftar user yang meminta registrasi.
          </p>
          <li>Saya ingin mengganti password atau nomor telepon, apa yang harus saya lakukan ?</li>
          <p>
            Pilih tombol Pengaturan pada pojok kanan atas, anda kemudian akan melihat form. Ubah kolom yang anda ingin ganti, kemudian klik Simpan.
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


