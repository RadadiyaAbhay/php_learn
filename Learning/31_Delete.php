<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'users';

    $conn = mysqli_connect($servername , $username , $password , $database);

    $sql = "DELETE FROM `Buyer` WHERE `sno` = '3'";
    $res = mysqli_query($conn , $sql);


    if($res){
        echo "done";
    }else{
        echo "not done ";
    }
?>