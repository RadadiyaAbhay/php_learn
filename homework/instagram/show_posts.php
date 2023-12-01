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

// Fetch and display posts
$sql = "SELECT posts.*, users.username FROM posts JOIN users ON posts.user_id = users.user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h3>Post by " . $row["username"] . "</h3>";
        echo "<p>" . $row["caption"] . "</p>";
        echo "<img src='" . $row["photo_path"] . "' alt='Posted Image' style='max-width: 300px;'><br>";
        echo "<hr>";
    }
} else {
    echo "No posts available.";
}

// Close the database connection
$conn->close();
?>
