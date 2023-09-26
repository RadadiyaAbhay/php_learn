<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "abhay";

    $con = mysqli_connect($servername , $username , $password ,$database);

    if(!$con){
        echo "Connection failed";
    }else{
        echo "Connection successfully run";
    };

    $sql = "CREATE TABLE `worker`( `sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `role` VARCHAR(20) NOT NULL , `doj` DATE NOT NULL ,PRIMARY KEY (`sno`)) ";

    $res = mysqli_query($con , $sql);
    echo '<br/>';
    echo var_dump($res);
?>