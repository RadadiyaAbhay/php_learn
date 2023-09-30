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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    // echo $name;


    // Use prepared statement to update user information
    $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email' WHERE `id` = $id";
    $stmt = mysqli_query($conn , $sql);

    if ($stmt) {
        echo "User updated successfully.";
    } else {
        echo "No Update Details " ;
    }

}else{
    // echo "Not Done";
}
// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // echo $id;

    // Check if the form has been submitted


    // Fetch the user's current details from the database
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }
} else {
    // echo "User ID not provided.";
    echo "<br/><a href='db.php'>Exit</a>";

    exit();
}




?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>

    <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
echo "<br/><a href='db.php'>Exit</a>";
?>
