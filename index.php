<?php
include('function/login.php');

if(isset($_SESSION['login_user'])){
  header("Location: dashboard.php");
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OMOM | Monitor Omzet</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="css/pace.css" />
</head>

<body class="index-body">
  <div class="off-canvas-wrap" >
    <div class="float-right large-3 side-full-height">
      <div class="row small-10">
        <img src="image/logo-telkom.png">
      </div>
      <div class="row small-5">
        <img src="image/daman.png">
      </div>
      <div class="login-form">
        <div class="inner">
          <form action="" method="post">
            <div class="row large-12 columns">
              <label><h5>Username</h5>
                <input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required />
              </label>
              <label><h5>Password</h5>
                <input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required />
              </label>
              <input id="remember" type="checkbox" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> ><label>Remember Me</label>
              <label>Don't have account ? <a href="registration.php">Sign Up here</a></label>
              <br>
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
  <script src="js/vendor/pace.min.js"></script>
</body>
</html>
