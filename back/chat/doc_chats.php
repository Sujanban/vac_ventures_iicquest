<?php
include '../function.php';
session_start();
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
  <title>MHS | Chat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

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
          <!-- Anonymous  -->
            <h1 class="m-0">Chat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

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

    <div class="bg-white p-2">

      <div class="user-panel d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block text-dark">Alexander Pierce</a>
        </div>
      </div>

      <table class="table">
              <thead>
                <th>UID</th>
                <th>Name</th>
                <th>Chat</th>
              </thead>
              <tbody>
<?php

$usercode = userdata($con, "Code");

$selectone = " SELECT * FROM colab WHERE Doctor_Code='$usercode' ";
$selectone_ex = mysqli_query($con,$selectone);
$selectone_count = mysqli_num_rows($selectone_ex);

while ($selectone_data = mysqli_fetch_array($selectone_ex)) {
  ?>
                <tr>
                  <td><?php echo $selectone_data['UID']; ?></td>
                  <td><?php
                  $doscode = $selectone_data['User_code'];
                  echo findcli($con,$doscode);
                  ?></td>
                  <td>
                    <a href="doc_go.php?userid=<?php echo $doscode; ?>&docs=<?php echo $usercode; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                  </td>
                </tr>
  <?php
}

?>
                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>


    </div>

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
</body>
</html>
