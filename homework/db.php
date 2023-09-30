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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <section>
        <?php
        // Check if the form was submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get form data
                $name = $_POST["name"];
                $email = $_POST["email"];
            
                // Create operation: Add a new user record to the "users" table
                $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
            
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            // // Close the database connection
            // $conn->close();

        ?>
        <h2>Create User</h2>

        <form method="POST" action="db.php">
            <label>Name:</label>
            <input type="text" name="name" required><br>
            <label>Email:</label>
            <input type="email" name="email" required><br>
            <input type="submit" value="Create">
        </form>

    </section>    



    <section>
        <h2>User List</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $co = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $co . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $row["id"] . "'>Edit</a> ";
                    echo "<a href='delete.php?id=" . $row["id"] . "'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                    $co = $co + 1;
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
        </table>


    </section>




</body>
</html>