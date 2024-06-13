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

<style>
  .posts {
    width: 50%;
    margin: auto;
  }
  @media only screen and (max-width: 600px) {
  .posts {
    width: 100%;
    margin: auto;
  }
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

<div class="user-panel d-flex">
  <div class="image">
    <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
  </div>
  <div class="info">
    <a class="d-block text-white">Alexander Pierce</a>
  </div>
</div>

<a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Create</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-dark">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Create Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
          <label for="" class="text-dark">Image</label>
          <input type="file" name="images" id="images" class="form-control my-1">
          <label for="" class="text-dark">Content</label>
          <textarea name="contents" class="form-control my-1" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="modal-footer">
        <button type="submit" name="posts" class="btn btn-primary">Post</button>
      </div>
      <?php

$uscode = userdata($con, "Code");

if (isset($_POST['posts'])) {

    $codes = rand(0000000000,9999999999);
    $contents = $_POST['contents'];

    $img_name = $_FILES['images']['name'];
    $temp_name = $_FILES['images']['tmp_name'];

    // Retrieve image type from its name
    $img_type = pathinfo($img_name, PATHINFO_EXTENSION);

    $new_img = uniqid("img-", true) . '.' . $img_type;
    $img_path = 'users/' . $new_img;
    move_uploaded_file($temp_name, $img_path);

    $query_add = "INSERT INTO posts (Code, User_code, Content, Images) VALUES ('$codes', '$uscode', '$contents', '$new_img')";
    $result_add = mysqli_query($con, $query_add);

    if ($result_add) {
        $_SESSION['success'] = "Post is added";
        ?><script> location.replace("discussion.php"); </script><?php
    } else {
        $_SESSION['error'] = "Post is unable to added";
        ?><script> location.replace("discussion.php"); </script><?php
    }
}
?>

      </form>
    </div>
  </div>
</div>

</div>

<div class="posts m-auto">

<?php 

$selectpost = " SELECT * FROM posts ";
$selectpost_ex = mysqli_query($con,$selectpost);
$selectpost_count = mysqli_num_rows($selectpost_ex);

while ($selectpost_data = mysqli_fetch_array($selectpost_ex)) {

  ?>
  <div class="p-2">

  <div class=" d-flex justify-content-between align-items-center p-2">

  <div class="user-panel d-flex">
    <div class="image">
      <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a class="d-block text-dark">Alexander Pierce</a>
    </div>
  </div>

  <?php

  if ($uscode == $selectpost_data['User_code']) {
    ?> <a href="delete.php?id=<?php echo $selectpost_data['UID']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> <?php
  }

  ?>

  </div>

    <hr>

    <img src="users/<?php echo $selectpost_data['Images']; ?>" alt="" style="width: 100%; height: 50%;">

    <div style="background-color: white; padding: 10px; ">
      <?php echo $selectpost_data['Content']; ?>
    </div>

      <div class="d-flex justify-content-between align-items-center gap-2 px-3" style="background-color: white;">
        <p class="mp-2">Comments</p>
        <a href="comments.php?id=<?php echo $selectpost_data['UID']; ?>" class="btn btn-success">Comments</a>
      </div>

    <div style="max-height: 80px; overflow: auto; padding: 5px;">



      </div>


  </div>
  <?php

}

?>

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
