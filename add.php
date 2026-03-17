<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];

    mysqli_query($conn,"INSERT INTO students(name,email,major) VALUES('$name','$email','$major')");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Add Student</h2>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Major</label>
        <input type="text" name="major" required>

        <button type="submit" name="submit" class="btn">Save</button>
        <a href="index.php" class="back-btn">Back</a>
    </form>
</div>

</body>
</html>