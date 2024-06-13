<?php
session_start();
include '../function.php';
if (!isset($_SESSION["sessionuser"])) {
	?> <script> location.replace("../../login.php"); </script> <?php
}
if (isset($_SESSION['error'])) {
	$msg['e'] = $_SESSION['error'];
	unset($_SESSION['error']);
}elseif (isset($_SESSION['success'])) {
	$msg['s'] = $_SESSION['success'];
	unset($_SESSION['success']);
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MHS | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .card {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f0f0f0;
      }

      .cart-box,
      .message {
        background-color: #fff;
        padding: 20px;
        border: 2px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .hidden {
        display: none;
      }

      .message {
        border-color: #d6e9c6;
        display: none;
      }

      .timer {
        margin-top: 10px;
        font-size: 18px;
        color: #333;
      }
    </style>


</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <?php include '../components/nav.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include '../components/side.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">











    <!-- card -->
    <div class="card">
      <div class="cart-box" id="cartBox">
        <img src="../../front/assets/yoga.gif" alt="">
        <div class="timer" id="timer">Time remaining: 01:00</div>
      </div>
      <div class="message" id="message">
        <img class="w-20 mx-auto " src="../../front/assets/tick.gif" alt="">
        <p>Thank you for doing exercise with us!</p>
        <div class="flex items-center space-x-2 justify-center">
            <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                <a href="../dashboard/dashboard.php" class="px-3 py-2 bg-blue-600 rounded text-white">Return Home</a>
              </p>
            <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                <a href="./meditation.php" class="px-3 py-2 bg-blue-600 rounded text-white">Play agian</a>
              </p>
        </div>
      </div>
    </div>














    <?php
if ($msg['e'] != "") {
    ?>
    <div style="margin: 10px 10px;">
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
    <div style="margin: 10px 10px;">
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





    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Settings</h5>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include '../components/footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script>
      document.addEventListener("DOMContentLoaded", function () {
        const cartBox = document.getElementById("cartBox");
        const message = document.getElementById("message");
        const timerElement = document.getElementById("timer");
        let timeLeft = 600; // 60 seconds for the countdown

        const countdown = setInterval(() => {
          timeLeft--;
          // Format time as MM:SS
          const minutes = String(Math.floor(timeLeft / 60)).padStart(2, "0");
          const seconds = String(timeLeft % 60).padStart(2, "0");
          timerElement.textContent = `Time remaining: ${minutes}:${seconds}`;

          if (timeLeft <= 0) {
            clearInterval(countdown);
            cartBox.classList.add("hidden");
            message.style.display = "block";
          }
        }, 1000); // Update every second
      });
    </script>
</body>
</html>
