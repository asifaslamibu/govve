<?php
include("../config_indemnifier.php");
$userData = count($_POST["cat"]);
$main = $_POST["main"];
// echo $main;
if ($userData > 0) {
    for ($i = 0; $i < $userData; $i++) {
        if (trim($_POST['cat'] != '')) {
            // $main_id = $active;
            $cat = $_POST["cat"][$i];
            $query  = "INSERT INTO `subcat`(`cat`,`main_id`) VALUES ('$cat','$main')";
            $result = mysqli_query($db, $query);
        }
    }
    
    echo "<script>
    alert('Trip Add successfully');
    // window.location.href='zpos.php';
    </script>";
    // header("location: ../zpos.php");
} else {
    echo "Please Enter user name";
}
