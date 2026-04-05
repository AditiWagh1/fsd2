<!DOCTYPE html>
<html>
<head><title>Student Registration</title></head>
<body>
    <h2>Student Registration Form</h2>
    <form action="insert.php" method="POST">
        First Name: <input type="text" name="fname" required><br><br>
        Last Name: <input type="text" name="lname" required><br><br>
        Roll No: <input type="text" name="roll" required><br><br>
        Password: <input type="password" name="pass" required><br><br>
        Contact: <input type="text" name="contact" required><br><br>
        <button type="submit" name="submit">Register Student</button>
    </form>
    <br>
    <a href="view.php">View All Students</a>
</body>
</html>