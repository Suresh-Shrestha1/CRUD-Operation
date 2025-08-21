<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>User List</h2>
    <a href="create.php">+ Add New User</a><br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM user");
        while ($row = $result->fetch_assoc()):
            $password = htmlspecialchars($row['password']);
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
                <span class="password-hidden" id="pw-<?= $row['id'] ?>">••••••••</span>
                <button class="toggle-btn" onclick="togglePassword('pw-<?= $row['id'] ?>', '<?= $password ?>', this)">Show</button>
            </td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<script>
function togglePassword(spanId, realPassword, btn) {
    const span = document.getElementById(spanId);
    if (btn.innerText === "Show") {
        span.innerText = realPassword;
        btn.innerText = "Hide";
    } else {
        span.innerText = "••••••••";
        btn.innerText = "Show";
    }
}
</script>
</body>
</html>