<?php

$msg = array('e' => "", 's' => "");

$con = mysqli_connect("localhost","root","","mhsdb");

if ($con) {

}else{
    $msg['e'] = "Unable to connect with database";
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