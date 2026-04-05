<?php
include 'db.php';

if(isset($_GET['roll'])) {
    $roll = $_GET['roll'];
    $sql = "DELETE FROM students WHERE roll_no = '$roll'";

    if (mysqli_query($conn, $sql)) {
        header("Location: view.php"); // Redirect back to the list
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>