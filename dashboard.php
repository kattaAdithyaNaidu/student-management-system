<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<a href="logout.php">Logout</a>
<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM users");

while($row = mysqli_fetch_assoc($result)) {
?>

<p>
<?php echo $row['name']; ?>

<a href="edit-user.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete-user.php?id=<?php echo $row['id']; ?>">Delete</a>

</p>

<?php } ?>