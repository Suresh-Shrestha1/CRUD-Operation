<?php include 'db.php'; 

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM user WHERE id=$id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn->query("UPDATE user SET name='$name', email='$email', password='$password' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Edit User</h2>
    <form method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($user['name']) ?>" required><br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"  value="<?= htmlspecialchars($user['email']) ?>" required><br><br>
        <label for="password">Password: </label>
        <input type="text" name="password" id="password"  value="<?= htmlspecialchars($user['password']) ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">← Back to User List</a>
</div>
</body>
</html>
