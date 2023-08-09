<?php
include 'dbmanagment.php';
$sql = "DELETE FROM employee_details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location:employee_view.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>