<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Add New User</h2>
    <form action="" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Create">
    </form>
    <br>
    <a href="index.php">← Back to User List</a>
</div>
</body>
</html>

<?php include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn->query("INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')");
    // header("Location: index.php"); // Redirecting to home page
}
?>
