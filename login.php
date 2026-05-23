<?php
session_start();
include 'db.php';

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $query);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])) {

        $_SESSION['user'] = $user['name'];

        header("Location: dashboard.php");

    } else {
        echo "Invalid Credentials";
    }
}
?>

<form method="POST">

<input type="email" name="email" placeholder="Email"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button name="login">Login</button>

</form>