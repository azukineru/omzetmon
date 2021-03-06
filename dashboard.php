<?php
include('function/session.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OM-OM | Dashboard</title>

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
      <div class="row small-3 small-offset-9 show-for-large">
        <h5>Hi, <a href="profile.php"><?php echo $login_fname; ?></a> | <a href="help.php">Help</a> | <a href="settings.php">Settings</a> | <a href="function/logout.php">Log out</a></h5>
      </div>
      <div class="row small-12 hide-for-large">
        <h5>Hi, <a href="profile.php"><?php echo $login_fname; ?></a> | <a href="help.php">Help</a> | <a href="settings.php">Settings</a> | <a href="function/logout.php">Log out</a></h5>
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
        <span class="title-bar-title">OMZET Online Monitoring System</span>
      </div>
    </div>
    <div class="callout primary">
      <div class="row column">
        <h1>Welcome to OM-OM | OMZET Online Monitoring System</h1>            
      </div>
    </div>
    <div class="row medium-12">
      <div class="inner">
        <h3>Our Status right now :</h3>
        <div class="column medium-3">
          <div class="card-flex-article card">
            <div class="card-image">
              <img src="image/dashboard/1.png">
            </div>
            <div class="card-section">
              <h4 class="article-title">Amount of Requests</h4>              
              <h1 class="article-summary">100</h1>
            </div>        
          </div>
          <div class="card-divider align-justify">
            <div class="notability">
            </div>
            <div class="card-actions">
            </div>
          </div>
        </div>
        <div class="column medium-3">
          <div class="card-flex-article card">
            <div class="card-image">
              <img src="image/dashboard/2.png">
            </div>
            <div class="card-section">
              <h3 class="article-title">Closed Requests</h3>              
              <h1 class="article-summary">60</h1>
            </div>
          </div>
          <div class="card-divider align-justify">
            <div class="notability">             
            </div>
            <div class="card-actions">            
            </div>
          </div>
        </div>
        <div class="column medium-3">
          <div class="card-flex-article card">
            <div class="card-image">
              <img src="image/dashboard/3.png">
            </div>
            <div class="card-section">
              <h3 class="article-title">Remained Request</h3>              
              <h1 class="article-summary">40</h1>
            </div>      
          </div>
          <div class="card-divider align-justify">
            <div class="notability">             
            </div>
            <div class="card-actions">         
            </div>
          </div>
        </div>
        <div class="column medium-3">
          <div class="card-flex-article card">
            <div class="card-image">
              <img src="image/dashboard/4.png">
            </div>
            <div class="card-section">
              <h3 class="article-title">Update Percentage</h3>              
              <h1 class="article-summary">60%</h1>
            </div>       
          </div>
          <div class="card-divider align-justify">
            <div class="notability">             
            </div>
            <div class="card-actions">            
            </div>
          </div>
        </div>


      </div>
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


