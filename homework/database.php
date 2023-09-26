<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'register';

        $conn = mysqli_connect($servername , $username , $password , $database);

        // $sql = "CREATE DATABASE register";

        // $sql = "CREATE TABLE `details`(`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `email` VARCHAR(30) NOT NULL , `dob` DATE NOT NULL ,PRIMARY KEY (`sno`))";

        // $sql = "INSERT INTO `details` (`name`,`email`,`dob`) VALUES ('Abhay','ab@gmail.com','2004-09-05')";
        $sql = "INSERT INTO `details` (`name`,`email`,`dob`) VALUES ('$name','$email','$dob')";

        $res = mysqli_query($conn , $sql);

        if($res){
            echo "Done";
        }else{
            echo "Not Done";

        }
    }
    ?>
    <?php

    ?>
    <form action="database.php" method="post">
        <label for="name">Name :</label>
        <br>
        <input type="text" name="name" id="name"/>
        <br/>
        <br/>
        <label for="email">Email :</label>
        <br>
        <input type="email" name="email" id="email"/>
        <br/>
        <br/>
        <label for="dob">DOB :</label>
        <br>
        <input type="date" name="dob" id="dob"/>
        <br/>
        <br/>
        <button type="submit">submit</button>
    </form>
    
</body>
</html>