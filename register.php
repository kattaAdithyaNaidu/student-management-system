<?php
include 'db.php';

if(isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];

    // Password Encryption
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $role = "user";

    $query = "INSERT INTO users(name,email,password,role)
              VALUES('$name','$email','$password','$role')";

    mysqli_query($conn, $query);

    echo "Registration Successful";
}
?>

<form method="POST">

    <input type="text" name="name" placeholder="Name" required><br><br>

    <input type="email" name="email" placeholder="Email" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button name="register">Register</button>

</form>