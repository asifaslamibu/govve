<?php
include("../config_indemnifier.php");

$sql = "DELETE FROM subcat WHERE add_id='" . $_GET["id"] . "'";
echo $sql;

if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
    header("location: ../subcat.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
