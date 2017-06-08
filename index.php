<?php
include('login.php');

if(isset($_SESSION['login_user'])){
  header("Location: dashboard.php");
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MO-Z | Monitor Omzet</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body style="background-image: url('image/bg.jpg'); background-size: 100%; background-position: bottom left;">
  <div class="off-canvas-wrap" >
    <div class="float-right side-full-height" style="background-color: #99e6ff;">
      <div class="login-form">
        <div class="inner">
          <form action="" method="post">
            <div class="row large-12 columns">
              <label><h4>Username</h4>
                <input type="text" name="username" placeholder="Username" required />
              </label>
              <label><h4>Password</h4>
                <input type="password" name="password" placeholder="Password" required />
              </label>			  
              <button class="button" type="submit" name="login">Login</button>	  
              <span><?php echo $error?></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/foundation.js"></script>
</body>
</html>
