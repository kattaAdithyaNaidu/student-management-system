<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

$user = mysqli_fetch_assoc($result);

if(isset($_POST['update'])) {

$name = $_POST['name'];

mysqli_query($conn,
"UPDATE users SET name='$name' WHERE id=$id");

header("Location: dashboard.php");
}
?>

<form method="POST">

<input type="text" name="name"
value="<?php echo $user['name']; ?>">

<button name="update">Update</button>

</form>