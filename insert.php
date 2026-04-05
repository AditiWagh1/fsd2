<?php
include 'db.php'; // Includes your connection code

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $roll = $_POST['roll'];
    $pass = $_POST['pass'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO students (first_name, last_name, roll_no, password, contact_no) 
            VALUES ('$fname', '$lname', '$roll', '$pass', '$contact')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully! <a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>