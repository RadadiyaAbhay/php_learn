<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'register';

    $conn = mysqli_connect($servername , $username , $password , $database);

    $sql = "SELECT * FROM `details`";
    $res = mysqli_query($conn , $sql);

    $num = mysqli_num_rows($res);
    

    if($num >0){
        for ($i=0; $i < $num; $i++) { 
            # code...
            $row = mysqli_fetch_assoc($res);
            echo "Sno = " . $row['sno']. "<br>Name = ". $row['name']. "<br>Email = ". $row['email'] . "<br>DOB = ". $row['dob'];
            echo "<br/>";
            echo "<br/>";
        }
    }

?>