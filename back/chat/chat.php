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

    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Anonymous</a></li>
          <!--<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Doctor</a></li>-->
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="active tab-pane" id="activity">

          <div class="p-2 bg-primary">

            <div class="user-panel d-flex">
              <div class="image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a class="d-block text-white">Alexander Pierce</a>
              </div>
            </div>

            </div>

            <div class="rounded" style="max-height: 400px; border: 1px solid rgb(209, 206, 206); position:relative; overflow:auto; transform:rotate(180deg);">

<div class="mt-5" style="transform:rotate(-180deg);">
              <?php

$usercode = userdata($con, "Code");

$select = "SELECT * FROM chat";
$select_ex = mysqli_query($con,$select);
$select_count = mysqli_num_rows($select_ex);
while ($select_data = mysqli_fetch_array($select_ex)) {
  if ($select_data['Code'] == $usercode) {
    ?>
    <div class="d-flex justify-content-end w-100 my-1">
      <div class="bg-success p-2">
        <?php echo $select_data['Message']; ?>
      </div>
    </div>
    <?php
  }else{
    ?>
    <div class="d-flex justify-content-start w-100 my-1">
      <div class="bg-light p-2">
        <?php echo $select_data['Message']; ?>
      </div>
    </div>
    <?php
  }
}

?>
</div>
            </div>
            <div style="border: 1px solid rgb(209, 206, 206);" class="p-1">
            <form action="" method="POST">
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control" name="chats" placeholder="Message">
                    <button type="submit" name="submit" class="btn btn-primary m-1"> <div class="d-flex align-items-center">
                    <i class="fas fa-paper-plane"></i>
                    <span class="ml-2">Send</span>
                    </div></button>
                </div>

<?php

if (isset($_POST['submit'])) {

  $chats = $_POST['chats'];

  $data = [
    'Code' => $usercode,
    'Message' => $chats
];

$result = insert($con,'chat',$data);

if ($result) {
  $_SESSION['success'] = "Chat is added";
  ?> <script> location.replace("chat.php"); </script> <?php
}else{
  $_SESSION['error'] = "Chat is unable to added";
  ?> <script> location.replace("chat.php"); </script> <?php
}

}

?>

                </form>
              </div>

          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="timeline">
            <!-- The timeline -->

            <table class="table">
              <thead>
                <th>UID</th>
                <th>Name</th>
                <th>Chat</th>
              </thead>
              <tbody>
<?php

$selectone = " SELECT * FROM colab WHERE User_code='$usercode' ";
$selectone_ex = mysqli_query($con,$selectone);
$selectone_count = mysqli_num_rows($selectone_ex);

while ($selectone_data = mysqli_fetch_array($selectone_ex)) {
  ?>
                <tr>
                  <td><?php echo $selectone_data['UID']; ?></td>
                  <td><?php
                  $doscode = $selectone_data['Doctor_Code'];
                  echo finddoc($con,$doscode);
                  ?></td>
                  <td>
                    <a href="doc_chat.php?userid=<?php echo $usercode; ?>&docs=<?php echo $doscode; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
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
          <!-- /.tab-pane -->
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
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
