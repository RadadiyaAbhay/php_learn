<?php
    echo "Welcome my Database";
    echo "<br/>";
    // How to connect MySQL Database;
    // MySQLi Extension
    // PDO = php database Object

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername , $username , $password);

    if(!$conn){
        die("sorry not Connect " . mysqli_connect_error());
    }
    echo "Your Connection Successfull";

?>