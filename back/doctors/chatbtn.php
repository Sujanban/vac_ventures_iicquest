<?php
session_start();
include '../function.php';

$uid = $_GET['id'];
$sessioncode = $_SESSION['sessionuser'];

$selectdoc = " SELECT * FROM colab WHERE User_code='$sessioncode' AND Doctor_Code='$uid' ";
$selectdoc_ex = mysqli_query($con,$selectdoc);
$selectdoc_count = mysqli_num_rows($selectdoc_ex);

if ($selectdoc_count > 0) {

    $_SESSION['error'] = "You already added the doctor";
      ?> <script> location.replace("assign.php"); </script> <?php

}else {

    $data = [
        'User_code' => $sessioncode,
        'Doctor_Code' => $uid,
        'Attr' => 1
    ];
    
    $result = insert($con,'colab',$data);
    
    if ($result) {
      $_SESSION['success'] = "New doctor is added to chat";
      ?> <script> location.replace("assign.php"); </script> <?php
    }else{
      $_SESSION['error'] = "New doctor is unable to added to chat";
      ?> <script> location.replace("assign.php"); </script> <?php
    }

}

?>