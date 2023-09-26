<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername , $username , $password);

    $sql = "CREATE DATABASE abhay2";
    $res = mysqli_query($conn , $sql);
    echo var_dump($res);

    if(!$conn){
        echo "Your Connection is fail";
    }else{
        echo "Your Connection is Success";
    }
?>