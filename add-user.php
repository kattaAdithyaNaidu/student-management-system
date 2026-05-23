<?php
include 'db.php';

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];

$query = "INSERT INTO users(name,email)
VALUES('$name','$email')";

mysqli_query($conn, $query);

echo "User Added";
}
?>

<form method="POST">

<input type="text" name="name" placeholder="Name">

<input type="email" name="email" placeholder="Email">

<button name="submit">Add User</button>

</form>