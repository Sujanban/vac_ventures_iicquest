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
  <title>MHS | Discussion</title>

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
            <h1 class="m-0">Discussion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Discussion</li>
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

<div class=" d-flex justify-content-between align-items-center p-2 bg-primary">

<h5 class="text-light">Comments</h5>

<a href="discussion.php" class="btn btn-danger">Back</a>

</div>

<div class="p-2">

    
<?php

$uid = $_GET['id'];

$uscode = userdata($con, "Code");

$selectpost = " SELECT * FROM posts WHERE UID='$uid'";
$selectpost_ex = mysqli_query($con,$selectpost);
$selectpost_data = mysqli_fetch_array($selectpost_ex);

$postcode = $selectpost_data['Code'];

?>

<div class="row">
    <div class="col-lg-4 col-md-12 col-sm-12">
        <img src="users/<?php echo $selectpost_data['Images']; ?>" alt="" style="width: 100%; height: 75%;">
        <div class="my-2 p-2">
            <?php echo $selectpost_data['Content']; ?>
        </div>
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12">
        <strong class="my-2">Comments</strong>

        <form action="" method="POST">
        <div class=" d-flex justify-content-between align-items-center p-2">
            <input type="text" placeholder="Comment" name="comcontent" class="form-control" id="">
            <button type="submit" name="comments" class="btn btn-success">Comments</button>

            <?php

if (isset($_POST['comments'])) {

  $comments = $_POST['comcontent'];

  $data = [
    'User_code' => $uscode, 
    'Post_code' =>  $selectpost_data['Code'],
    'Comment' => $comments
];

$result = insert($con,'comments',$data);

if ($result) {
  $_SESSION['success'] = "Comment is added";
  ?> <script> location.replace("discussion.php"); </script> <?php
}else{
  $_SESSION['error'] = "Comment is unable to added";
  ?> <script> location.replace("discussion.php"); </script> <?php
}

}

?>

        </div>
        </form>

        <?php

$selectcomment = " SELECT * FROM comments WHERE Post_code='$postcode' ";
$selectcomment_ex = mysqli_query($con,$selectcomment);
$selectcomment_count = mysqli_num_rows($selectcomment_ex);

while ($selectcomment_data = mysqli_fetch_array($selectcomment_ex)) { 

  $getuser = $selectcomment_data['User_code'];

  $usernameqry = " SELECT * FROM users WHERE Code='$getuser' ";
  $usernameqry_ex = mysqli_query($con, $usernameqry);
  $usernameqry_fetch = mysqli_fetch_array($usernameqry_ex);

  ?>
  <div class="p-1 bg-white text-dark my-2">
    <strong><?php echo $usernameqry_fetch['Name']; ?></strong>
    <p><?php echo $selectcomment_data['Comment']; ?></p>
  </div>
  <?php

}

?>
    </div>
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
