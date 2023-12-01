<?php
// Database connection (replace these with your database details)
$host = "localhost";
$username = "root";
$password = "";
$database = "instagram";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}

// Close the database connection
$conn->close();
?>
