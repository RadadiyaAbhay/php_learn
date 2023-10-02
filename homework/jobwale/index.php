<?php
// Connect to the database
$connection = mysqli_connect("localhost", "root", "", "jobwale");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query the database to check if the username exists
    $query = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $db_username, $db_password);
    mysqli_stmt_fetch($stmt);

    // Verify the password
    if (password_verify($password, $db_password)) {
        // Start a session and store user information
        session_start();
        $_SESSION["user_id"] = $id;
        $_SESSION["username"] = $db_username;

        // Redirect to a logged-in page
        header("Location: dashboard.php");
    } else {
        // Display an error message
        echo "Incorrect username or password.";
    }

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}

?>