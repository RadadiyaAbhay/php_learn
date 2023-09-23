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

    $n = "vikrant";
    $r ="prog";
    $d = "2020-08-15";
    $sql = "INSERT INTO `worker` (`name` ,`role` ,`doj`) VALUES ('$n','$r','$d')";

    $res = mysqli_query($con , $sql);
    echo '<br/>';
    echo var_dump($res);
    
?>