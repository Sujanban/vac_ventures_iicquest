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

<?php
        $ussscode = $_SESSION["sessionuser"];
        if (userdata($con, "Mode") == 0) {
            
            $alt =  " SELECT * FROM colab WHERE User_code='$ussscode' ";
            $alt_ex = mysqli_query($con,$alt);
            $alt_count = mysqli_num_rows($alt_ex);
            while ($alt_data = mysqli_fetch_array($alt_ex)) {
              if ($alt_data['Attr'] == 1) {

                ?>
                  <div class="bg-success p-2">
                      <p><strong>Note</strong> <?php echo finddoc($con,$alt_data['Doctor_Code']); ?> Connect 
                      <form action="" method="POST">
                        <input type="text" name="stucn" id="">
                        <button type="submit" name="apply" class="btn btn-sm btn-success">Connect</button>
<?php
if (isset($_POST['apply'])) {
  $stucn = $_POST['stucn'];
  $usercodesok = $alt_data['Doctor_Code'];
  $updates = " UPDATE colab SET link='$stucn' WHERE User_code='$ussscode' AND Doctor_Code='$usercodesok' ";
  $updates_ex = mysqli_query($con,$updates);
}
?>
                      </form>
                      </p>
                  </div>
              <?php

              }
                
            }
            
        }

        $ussscode = $_SESSION["sessionuser"];

        if (userdata($con, "Mode") == 1) {
            
            $docqry = " SELECT * FROM colab WHERE Doctor_Code='$ussscode' ";
            $docqry_ex = mysqli_query($con,$docqry);
            $docqry_count = mysqli_num_rows($docqry_ex);
            $docqry_data = mysqli_fetch_array($docqry_ex);

            if ($docqry_data['Attr'] == 1) {

              ?>
                  <div class="bg-danger p-2">
                      <p><strong>Note</strong> <?php echo finddoc2($con,$docqry_data['User_code']); ?> Join now 
                      <?php echo $docqry_data['link']; ?>
                      <form action="" method="POST">
                        <button type="submit" name="tickok" class="btn btn-sm btn-secondary">Connect</button>

                        <?php
if (isset($_POST['tickok'])) {
  $stucn = 0;
  $usercodesoks = $docqry_data['User_code'];
  $updates = " UPDATE colab SET Attr='$stucn' WHERE User_code='$usercodesoks' AND Doctor_Code='$ussscode' ";
  $updates_ex = mysqli_query($con,$updates);
  ?>
  <script> location.replace("<?php echo $docqry_data['link']; ?>"); </script>
  <?php
}
?>

                      </form>
                      </p>
                  </div>
              <?php

            }
            
        }
        
        ?>

<strong class="my-2"> Games and sports </strong>

<!--<div class="row">-->
<!--          <div class="col-md-3 col-sm-6 col-12">-->
<!--            <div class="info-box">-->
<!--              <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>-->

<!--              <div class="info-box-content">-->
<!--                <span class="info-box-text">Messages</span>-->
<!--                <a href="" class="btn btn-sm btn-primary">Play now</a>-->
<!--              </div>-->
              <!-- /.info-box-content -->
<!--            </div>-->
            <!-- /.info-box -->
<!--          </div>-->
          <!-- /.col -->
<!--          <div class="col-md-3 col-sm-6 col-12">-->
<!--            <div class="info-box">-->
<!--              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>-->

<!--              <div class="info-box-content">-->
<!--                <span class="info-box-text">Bookmarks</span>-->
<!--                <a href="" class="btn btn-sm btn-primary">Play now</a>-->
<!--              </div>-->
              <!-- /.info-box-content -->
<!--            </div>-->
            <!-- /.info-box -->
<!--          </div>-->
          <!-- /.col -->
<!--          <div class="col-md-3 col-sm-6 col-12">-->
<!--            <div class="info-box">-->
<!--              <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>-->

<!--              <div class="info-box-content">-->
<!--                <span class="info-box-text">Uploads</span>-->
<!--                <a href="" class="btn btn-sm btn-primary">Play now</a>-->
<!--              </div>-->
              <!-- /.info-box-content -->
<!--            </div>-->
            <!-- /.info-box -->
<!--          </div>-->
          <!-- /.col -->
<!--          <div class="col-md-3 col-sm-6 col-12">-->
<!--            <div class="info-box">-->
<!--              <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>-->

<!--              <div class="info-box-content">-->
<!--                <span class="info-box-text">Likes</span>-->
<!--                <a href="" class="btn btn-sm btn-primary">Play now</a>-->
<!--              </div>-->
              <!-- /.info-box-content -->
<!--            </div>-->
            <!-- /.info-box -->
<!--          </div>-->
          <!-- /.col -->
<!--        </div>-->
<div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-lungs"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inhale</span>
                <a href="../games/inhel.php" class="btn btn-sm w-50 btn-info">Play now</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-brain"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Yoga</span>
                <a href="../games/meditation.php" class="btn w-50 btn-sm btn-success">Play now</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-running"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Excerise</span>
                <a href="../games/exercise.php" class="btn w-50 btn-sm btn-warning">Play now</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fas fa-music"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Music</span>
                <a href="../games/song.php" class="btn btn-sm w-50 btn-danger">Play now</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <strong class="my-2"> Tasks </strong>

<div class="row">
  <div class="col-lg-6 col-md-12 col-sm-12">

    <!-- Widget: user widget style 1 -->
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
        <a href="" class="btn btn-success">
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
<!-- /.widget-user -->

  </div>

  <div class="col-lg-6 col-md-12 col-sm-12">

    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-primary">
    <h3 class="widget-user-username">Day 2</h3>
    <h5 class="widget-user-desc">Challenge</h5>
  </div>
  <div class="widget-user-image">
    <img class="img-circle elevation-2" src="../dist/img/d2.jpg" alt="User Avatar">
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
        <a href="" class="btn btn-primary">
            <div class=" d-flex align-items-center">
            <i class="fas fa-lock"></i>
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
<!-- /.widget-user -->

  </div>

  <div class="col-lg-6 col-md-12 col-sm-12">

    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-danger">
    <h3 class="widget-user-username">Day 3</h3>
    <h5 class="widget-user-desc">Challenge</h5>
  </div>
  <div class="widget-user-image">
    <img class="img-circle elevation-2" src="../dist/img/d3.jpg" alt="User Avatar">
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
        <a href="" class="btn btn-danger">
            <div class=" d-flex align-items-center">
            <i class="fas fa-lock"></i>
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
<!-- /.widget-user -->

  </div>

  <div class="col-lg-6 col-md-12 col-sm-12">

    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-info">
    <h3 class="widget-user-username">Day 4</h3>
    <h5 class="widget-user-desc">Challenge</h5>
  </div>
  <div class="widget-user-image">
    <img class="img-circle elevation-2" src="../dist/img/d4.jpg" alt="User Avatar">
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
          <a href="" class="btn btn-info">
            <div class=" d-flex align-items-center">
            <i class="fas fa-lock"></i>
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
<!-- /.widget-user -->

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
