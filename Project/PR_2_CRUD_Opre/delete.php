<!DOCTYPE html>
<html>
<head>
    <title>Confirmation Dialog Example</title>
</head>
<body>

<button onclick="showConfirmation()">Click me</button>

<script>
function showConfirmation() {
    var result = confirm("Do you want to continue?");
    
    if (result) {
        // User clicked "Yes"
        alert("You clicked 'Yes'");
    } else {
        // User clicked "No" or closed the dialog
        alert("You clicked 'No' or closed the dialog");
    }
}
</script>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "MyNotes";

$conn = mysqli_connect($servername , $username , $password ,$database);


// Delete Note
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = " DELETE FROM `notes` WHERE `notes`.`sno` = $id ";
    $res = mysqli_query($conn , $sql);

    header("Location: index.php");
    exit();

}



?>