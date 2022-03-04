<?php

include("../config_indemnifier.php");
$sql = "DELETE FROM complaint WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
    header("location: ../com_table.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
