<?php
session_start();
include '../function.php';
if (!isset($_SESSION["sessionuser"])) {
	?> <script> location.replace("../../login.php"); </script> <?php
}
?>


<?php

$uid = $_GET['id'];

$selectpost = " SELECT * FROM posts WHERE UID='$uid";
$selectpost_ex = mysqli_query($con,$selectpost);
$selectpost_data = mysqli_fetch_array($selectpost_ex);

$img = $selectpost_data['Images'];

unlink($img);

$del = " DELETE FROM posts WHERE UID='$uid' ";
$del_ex = mysqli_query($con,$del);

if ($del_ex) {
    $_SESSION['success'] = "Post is deleted";
    ?><script> location.replace("discussion.php"); </script><?php
}else{
    $_SESSION['error'] = "Post is unable to delete";
    ?><script> location.replace("discussion.php"); </script><?php
}

?>