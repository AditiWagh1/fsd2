<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM students");

echo "<h2>Registered Students</h2>";
echo "<table border='1'>
<tr><th>Roll No</th><th>Name</th><th>Contact</th><th>Actions</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['roll_no'] . "</td>";
    echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
    echo "<td>" . $row['contact_no'] . "</td>";
    // Add links for Delete and Update passing the Roll No as a URL parameter
    echo "<td>
            <a href='update.php?roll=" . $row['roll_no'] . "'>Edit</a> | 
            <a href='delete.php?roll=" . $row['roll_no'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
          </td>";
    echo "</tr>";
}
echo "</table>";
echo "<br><a href='index.php'>Add New Student</a>";
?>