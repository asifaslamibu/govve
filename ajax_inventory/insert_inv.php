<?php
session_start();
include("../config_indemnifier.php");


$id = $_SESSION['userid'];
// $dpt = $_SESSION['dpt'];


// $c_code = mysqli_real_escape_string($db, $_POST["c_code"]);
$c_name = mysqli_real_escape_string($db, $_POST["c_name"]);
$address = mysqli_real_escape_string($db, $_POST["address"]);
$nic = mysqli_real_escape_string($db, $_POST["nic"]);
$city = mysqli_real_escape_string($db, $_POST["city"]);
$province = mysqli_real_escape_string($db, $_POST["province"]);
$lm = mysqli_real_escape_string($db, $_POST["lm"]);
$prio = mysqli_real_escape_string($db, $_POST["prio"]);
$age = mysqli_real_escape_string($db, $_POST["age"]);
$c_detail = mysqli_real_escape_string($db, $_POST["c_detail"]);
$gender = mysqli_real_escape_string($db, $_POST["gender"]);
$h_type1 = mysqli_real_escape_string($db, $_POST["h_type1"]);
$type = mysqli_real_escape_string($db, $_POST["type"]);
$dt = mysqli_real_escape_string($db, $_POST["dt"]);
$r_dpt = mysqli_real_escape_string($db, $_POST["r_dpt"]);
$cal_type = mysqli_real_escape_string($db, $_POST["cal_type"]);
$com_type = mysqli_real_escape_string($db, $_POST["com_type"]);
$com_sub_type = mysqli_real_escape_string($db, $_POST["sub_type"]);
$res = mysqli_real_escape_string($db, $_POST["res"]);
$ref = mysqli_real_escape_string($db, $_POST["ref"]);
$c_no = mysqli_real_escape_string($db, $_POST["c_no"]);
$c_no2 = mysqli_real_escape_string($db, $_POST["c_no2"]);
$home = mysqli_real_escape_string($db, $_POST["home"]);
$ofic_no = mysqli_real_escape_string($db, $_POST["ofic_no"]);
$dpt = mysqli_real_escape_string($db, $_POST["dpt"]);

$query_main  = "INSERT INTO `complaint`(`c_name`,`address`,`nic`,`city`,`province`,`lm`,`prio`,`age`,`c_detail`,`gender`,`h_type`,`type`,`dt`,`r_dpt`,`cal_type`,`com_type`,`sub_type`,`res`,`ref`,`c_no`,`c_no2`,`home`,`ofic_no`,`dpt`,`user_id`) 
Value('$c_name', '$address','$nic','$city','$province','$lm','$prio','$age','$c_detail','$gender','$h_type1', '$type', '$dt', '$r_dpt', '$cal_type', '$com_type','$com_sub_type' ,'$res','$ref', '$c_no', '$c_no2', '$home', '$ofic_no','$dpt','$id')";
// echo $query_main;
$result_main = mysqli_query($db, $query_main);
$active = mysqli_insert_id($db);


if ($userData > 0) {

    echo "<script>
alert('Trip Add successfully');
// window.location.href='zpos.php';
</script>";
    // header("location: ../zpos.php");
} else {
    echo "Please Enter user name";
}
