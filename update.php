<?php
include 'db.php';

// 1. Fetch current data to show in the form
if(isset($_GET['roll'])) {
    $roll = $_GET['roll'];
    $record = mysqli_query($conn, "SELECT * FROM students WHERE roll_no='$roll'");
    $data = mysqli_fetch_array($record);
}

// 2. Process the update when the button is clicked
if(isset($_POST['update'])) {
    $roll = $_POST['roll'];
    $new_contact = $_POST['contact'];
    
    $sql = "UPDATE students SET contact_no='$new_contact' WHERE roll_no='$roll'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated! <a href='view.php'>View Changes</a>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <h3>Update Contact for Roll No: <?php echo $data['roll_no']; ?></h3>
    <input type="hidden" name="roll" value="<?php echo $data['roll_no']; ?>">
    New Contact Number: <input type="text" name="contact" value="<?php echo $data['contact_no']; ?>">
    <button type="submit" name="update">Save Changes</button>
</form>