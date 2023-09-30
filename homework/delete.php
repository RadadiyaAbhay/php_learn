<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mycrudapp";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Handle the confirmation of deletion
        $confirmation = $_POST["confirmation"];
        if ($confirmation === "yes") {
            $sql = "DELETE FROM users WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo "User deleted successfully.";
            } else {
                echo "Error deleting user: " . $conn->error;
            }
        } else {
            echo "User not deleted.";
        }
    } else {
        // Display a confirmation prompt
        echo "Are you sure you want to delete this user?";
        echo "<form method='POST'>";
        echo "<input type='hidden' name='confirmation' value='yes'>";
        echo "<input type='submit' value='Yes'>";
        echo "</form>";
    }
} else {
    echo "User ID not provided.";
}

echo "<br/><a href='db.php'>Exit</a>";

?>
