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
  <title>OMOM | Registration</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="css/pace.css" />
  <link rel="stylesheet" href="font/foundation-icons.css" />
</head>

<body class="index-body">
  <div class="off-canvas-wrap" >
    <div class="column large-6 side-full-height">
      <div class="row medium-12">
        <a href="index.php"><h4><i class="fi-arrow-left"></i>&nbspBack</h4></a>
        <center><h2>Registration</h2></center>
      </div>
      <br>
      <div class="row medium-10">
        <div class="inner">

          <form data-abide novalidate>
            <div class="medium-6 columns">
              <label>First Name
                <input id="fname" type="text" name="fname" placeholder="Enter Your First Name" required>
                <span class="form-error">
                  I'm required!
                </span>
              </label>
            </div>
            <div class="medium-6 columns">
              <label>Last Name
                <input id="lname" type="text" name="lname" placeholder="Enter Your Last Name" required>
                <span class="form-error">
                  I'm required!
                </span>
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Phone Number
                <input id="phone" type="text" name="phone" placeholder="Enter Your Phone Number" pattern="number" required>
                <span class="form-error">
                  Please fill out a valid phone number!
                </span>
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Password
                <input id="password" type="password" name="password" placeholder="Enter Your Password" pattern=".{6,}" required>
                <span class="form-error">
                  Please enter at least 6 characters as your password!
                </span>
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Re-enter Password
                <input type="password" name="repassword" placeholder="Re-enter Your Password" required pattern="alpha_numeric" data-equalto="password">
                <span class="form-error">
                  Hey, passwords are supposed to match!
                </span>
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Select Account Type
                <select>
                  <option value="hd_daman">HD Daman (Can Insert Update and View Data)</option>
                  <option value="premium">Premium User (Only Insert and View Data)</option>
                  <option value="basic">Basic User (Only View Data)</option>
                </select>
              </label>
            </div>
            <div class="medium-12 columns">
              <input id="agreement" type="checkbox" required><label for="agreement">I have read and agree to the <a href="#">Terms and Conditions.</a></label>
              <span class="form-error">
                  Please check this box!
                </span>
            </div>
            <div class="medium-12 columns">
              <button class="button" type="submit" value="Submit">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>

    <div class="column large-6" style="background-color: red;">
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/vendor/foundation.abide.js"></script>
  <script src="js/vendor/pace.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
