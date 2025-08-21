<?php include 'db.php';

$sql = "CREATE TABLE IF NOT EXISTS user(id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(40) NOT NULL, email VARCHAR(60) NOT NULL UNIQUE, password VARCHAR(40) NOT NULL);";

if($conn->query($sql)){
    echo "User Table Created";
}
else{
    echo "Error creating table" .$conn->mysqli_error;
}
?>