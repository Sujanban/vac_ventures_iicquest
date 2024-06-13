<?php

$msg = array('e' => "", 's' => "");

$con = mysqli_connect("localhost","pixdosco_mhsdb","notsoout123","pixdosco_mhsdb");

if ($con) {

}else{
    $msg['e'] = "Unable to connect with database";
}

function userdata($con, $fetchhead) {
    $sessioncode = $_SESSION['sessionuser'];
    $userdataqry = " SELECT * FROM users WHERE Code='$sessioncode' ";
    $userdataqry_ex = mysqli_query($con, $userdataqry);
    $userdataqry_fetch = mysqli_fetch_array($userdataqry_ex);
    return $userdataqry_fetch[$fetchhead];
  }
  
  function finddoc($con,$doscode) {
  $fetchdoc = " SELECT * FROM users WHERE Code='$doscode' AND Mode='1' ";
  $fetchdoc_ex = mysqli_query($con,$fetchdoc);
  $fetchdoc_data = mysqli_fetch_array($fetchdoc_ex);
  return $fetchdoc_data['Name'];
}

function finddoc2($con,$doscode) {
  $fetchdoc = " SELECT * FROM users WHERE Code='$doscode' AND Mode='0' ";
  $fetchdoc_ex = mysqli_query($con,$fetchdoc);
  $fetchdoc_data = mysqli_fetch_array($fetchdoc_ex);
  return $fetchdoc_data['Name'];
}


  function insert($con,$table,$data) {
    $col = array_keys($data);
    $value = array_values($data);
    $finalcol = implode(',',$col);
    $finalvalue = "'" . implode("','",$value) . "'";
    $query = " INSERT INTO $table ($finalcol) VALUES ($finalvalue) ";
    $result = mysqli_query($con,$query);
    return $result;
}

?>