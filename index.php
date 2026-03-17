<?php
include 'config.php';

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Management System</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Student Management System</h1>

<a href="add.php">Add Student</a>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Major</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['major']; ?></td>

<td>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</body>
</html>