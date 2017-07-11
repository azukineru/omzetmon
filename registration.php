<?php
include('function/login.php');
include('function/omom.php');

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

          <form data-abide novalidate method="post">
            <div class="medium-6 columns">
              <label>First Name
                <input id="fname" type="text" name="fname" placeholder="Enter Your First Name" required>
                <span class="form-error">
                  First Name required!
                </span>
              </label>
            </div>
            <div class="medium-6 columns">
              <label>Last Name
                <input id="lname" type="text" name="lname" placeholder="Enter Your Last Name" required>
                <span class="form-error">
                  Last Name required!
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
              <label>Email
                <input id="email" type="text" name="email" placeholder="Enter Your Email" pattern="email" required>
                <span class="form-error">
                  Please fill out a valid e-mail address!
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
                  Passwords are supposed to match!
                </span>
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Select Account Type
                <select name="acctype" id="ddl1" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
                  <option value="provisioning">Provisioning</option>
                  <option value="assurance">Assurance</option>
                  <option value="maintenance">Maintenance</option>
				  <option value="deployment">Deployment</option>
                  <option value="migration">Migration</option>
                  <option value="daman">Daman</option>
                </select>
              </label>
            </div>
			<div class="medium-12 columns">
              <label>Select STO
                <select name="sto" id="ddl2">
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
					  <option value="WITEL">WITEL</option>
                </select>
              </label>
            </div>
			<div class="medium-12 columns">
              <label for="agreement">
                <input id="agreement" type="checkbox" required>I hereby declare that the information submitted here are valid and I take full responsibility for that.
                <span class="form-error">
                  Please check this box!
                </span>
              </label>
            </div>
            <div class="medium-12 columns">
              <button class="button" type="submit" value="Submit" name="submit">Submit</button>
            </div>
          </form>
		<?php
			if(isset($_POST['submit'])){
				signUp($_POST['email'],$_POST['password'],$_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['acctype'],$_POST['sto']);
			}
		?>
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
  <script src="js/ddl.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
