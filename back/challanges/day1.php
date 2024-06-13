<?php
session_start();
include '../function.php';
if (!isset($_SESSION["sessionuser"])) {
?> <script>
        location.replace("../../login.php");
    </script> <?php
            }
            if (isset($_SESSION['error'])) {
                $msg['e'] = $_SESSION['error'];
                unset($_SESSION['error']);
            } elseif (isset($_SESSION['success'])) {
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
                            <h1 class="m-0">Day1 Task</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Day1 Task</li>
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


<div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">
                <h3 class="widget-user-username">Day 1</h3>
                <h5 class="widget-user-desc">Challenge</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/d1.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">20%</h5>
                      <span class="description-text">Complated</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">4</h5>
                      <span class="description-text">Tasks</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <a href="../challanges/day1.php" class="btn btn-success">
                        <div class=" d-flex align-items-center">
                          <i class="fas fa-unlock"></i>
                          <span class="pl-2">continue</span>
                        </div>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
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