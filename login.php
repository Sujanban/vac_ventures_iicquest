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
  <title>MHS | Login (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="back/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="back/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

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

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="login.php" class="h1"><b>MHS</b> LOGIN</a>
    </div>
    <div class="card-body">

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="usname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="uspass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>

<?php

if (isset($_POST['login'])) {

    $usname = $_POST['usname'];
    $uspass = $_POST['uspass'];

    echo $hasspass = md5($uspass);

    $query = " SELECT * FROM users WHERE Email='$usname' AND Security='$hasspass' ";
    $query_ex = mysqli_query($con,$query);
    $query_count = mysqli_num_rows($query_ex);
    if ($query_count == 1) {
      $query_data = mysqli_fetch_array($query_ex);
      $status = $query_data['Status'];
      if ($status == 0) {
        $code = $query_data['Code'];
        $_SESSION['sessionuser'] = $code;
        $_SESSION['success'] = "Welcome in health care center";
        ?> <script> location.replace("back/dashboard/dashboard.php"); </script> <?php
      }else{
        $_SESSION['error'] = "Your account has been suspended";
        ?> <script> location.replace("login.php"); </script> <?php
      }
    }else{
      $_SESSION['error'] = "Your username and password is incorrent, Please try again letter";
        ?> <script> location.replace("login.php"); </script> <?php
    }

}

?>

      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="back/dist/js/adminlte.min.js"></script>
</body>
</html>
