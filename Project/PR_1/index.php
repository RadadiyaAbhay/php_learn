<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $email= $_POST['email'];
            $pass= $_POST['pass'];


            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "Users";
    
            $conn = mysqli_connect($servername , $username , $password ,$database);
    
            // $sql = "CREATE DATABASE Users";
    
            // $sql = "CREATE TABLE `Buyer` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `dob` DATE NOT NULL , `email` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`sno`))";
    
            // $sql = "INSERT INTO `Buyer` (`name`,`dob`,`email`,`password`) VALUES ('abhay','2020-11-04','ab@gmail.com','@sndakl') ";
            $sql = "INSERT INTO `Buyer` (`name`,`dob`,`email`,`password`) VALUES ('$name ','$dob','$email','$pass') ";
    
    
            $res = mysqli_query($conn , $sql);
            
    
            if($res){
                echo "done";
            }
        }

    ?>
    <div>
        <form action="index.php" method="post">
            <label for="name">Name :</label><br>
            <input type="text" id="name" name="name"><br><br>

            <label for="dob">DOB :</label><br>
            <input type="date" id="dob" name="dob"><br><br>

            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="pass">Password :</label><br>
            <input type="password" id="pass" name="pass"><br><br>

            <button type="submit">Submit</button>
        </form>
        <?php

            function printU(){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "Users";
            
                $conn = mysqli_connect($servername , $username , $password ,$database);
            
                $sql = "SELECT * FROM `Buyer`";
            
                $res = mysqli_query($conn , $sql);

                $num = mysqli_num_rows($res);
                if($num >0){
                    for ($i=0; $i < $num; $i++) { 
                        # code...
                        $row = mysqli_fetch_assoc($res);
                        echo "Sno = " . $row['sno'] ."<br>Name = " . $row['name'] . "<br>DOB =" . $row['dob'] . "<br>Email =" . $row['email'] . "<br>Password =" . $row['password']  . "<br><br>";
                    }
                }
            }

            if (isset($_GET['myButton'])) {
                printU();
            }


        ?>
            <form method="get">
                <button type="submit"  name="myButton">Print</button>
            </form>
    </div>


</body>
</html>