<?php
session_start();
include 'functions.php';
if (isset($_SESSION['error'])) {
	$msg['e'] = $_SESSION['error'];
	unset($_SESSION['error']);
}elseif (isset($_SESSION['success'])) {
	$msg['s'] = $_SESSION['success'];
	unset($_SESSION['success']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MHS | Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="back/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="back/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">

<?php
if ($msg['e'] != "") {
    ?>
    <div style="position: absolute; top: 10px; margin: 10px 10px;">
        <div class="px-3 py-2 bg-danger text-light w-100">
            <div class="d-flex justify-content-start align-items-center">
                <i class="fas fa-exclamation-triangle"></i>
                <strong class="ml-2"><?php echo $msg['e']; ?></strong>
            </div>
        </div>
    </div>
    <?php
}
if ($msg['s'] != "") {
    ?>
    <div style="position: absolute; top: 10px; margin: 10px 10px;">
      <div class="px-3 py-2 bg-success text-light w-100">
          <div class="d-flex justify-content-start align-items-center">
              <i class="fas fa-check-circle"></i>
              <strong class="ml-2"><?php echo $msg['s']; ?></strong>
          </div>
      </div>
    </div>
    <?php
}
?>

<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>MHS</b> DOCTOR</a>
    </div>
    <div class="card-body">

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="names" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="mail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="contact" placeholder="Contact">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="address" placeholder="Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="setpass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="repass" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="1">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>

<?php

if (isset($_POST['register'])) {
    $names = $_POST['names'];
    $mail = $_POST['mail'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $setpass = $_POST['setpass'];
    $haspass = md5($setpass);
    $repass = $_POST['repass'];
    $terms = $_POST['terms'];

    $codes = rand(0000000000,9999999999);

    if ($terms == 1) {
        if ($setpass == $repass) {
            $data = [
                'Code' => $codes,
                'Name' => $names,
                'Email' => $mail,
                'Contact' => $contact,
                'Address' => $address,
                'Security' => $haspass,
                'Pass_word' => $setpass,
                'Mode' => 1
            ];

            $result = insert($con,'users',$data);
            if ($result) {
                $_SESSION['success'] = "doctor details is added successfully";
                ?> <script> location.replace("login.php"); </script> <?php
            }else{
                $_SESSION['error'] = "Unable to add dovtor details";
                ?> <script> location.replace("register.php"); </script> <?php
            }
        } else {
            $_SESSION['error'] = "Password and Re-password are not match";
            ?> <script> location.replace("register.php"); </script> <?php
        }
    }else{
        $_SESSION['error'] = "Please check the agree checkbox, and try again";
        ?> <script> location.replace("register.php"); </script> <?php
    }

}

?>

      </form>

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="back/dist/js/adminlte.min.js"></script>
</body>
</html>
