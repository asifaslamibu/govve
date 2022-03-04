<?php
include("config_indemnifier.php");
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Attempt update query execution
    $c_name = mysqli_real_escape_string($db, $_POST["c_name"]);
    $address = mysqli_real_escape_string($db, $_POST["address"]);
    $nic = mysqli_real_escape_string($db, $_POST["nic"]);
    $district = mysqli_real_escape_string($db, $_POST["district"]);
    $province = mysqli_real_escape_string($db, $_POST["province"]);
    // $dpt = mysqli_real_escape_string($db, $_POST["dpt"]);
    $status = mysqli_real_escape_string($db, $_POST["status"]);
    $subcat = mysqli_real_escape_string($db, $_POST["subcat"]);
    $pro = mysqli_real_escape_string($db, $_POST["pro"]);
    $ref = mysqli_real_escape_string($db, $_POST["ref"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $whatsapp = mysqli_real_escape_string($db, $_POST["whatsapp"]);
    $fb = mysqli_real_escape_string($db, $_POST["fb"]);
    $sql = "UPDATE `complaint` SET `c_name`='$c_name',`address`='$address',`nic`='$nic',`district`='$district',`province`='$province' ,`status`='$status' ,`subcat`='$subcat' ,`pro`='$pro' ,`ref`='$ref' ,`email`='$email',`fb`='$fb',`fb`='$fb' WHERE id='$id'";
    echo $sql;
    if (mysqli_query($db, $sql)) {
        echo "<script>
alert('Record Update successfully');
window.location.href='com_table.php';
</script>";
    } else {
        echo $sql;
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
}

// Close connection
mysqli_close($db);
