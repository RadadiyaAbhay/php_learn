<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'users';

$conn = mysqli_connect($servername , $username , $password , $database);

$sql = "SELECT * FROM `Buyer` WHERE `email`= 'radadiy@gmail.com'";

$res = mysqli_query($conn , $sql);

if($res){
    $num =  mysqli_num_rows($res);
    

    $row = mysqli_fetch_assoc($res);
    echo $row['email'];
}

$sql1 = "UPDATE `Buyer` SET `email` = 'radadiya@gmail.com' WHERE `sno` = 3";
$res1 = mysqli_query($conn , $sql1);

$affe = mysqli_affected_rows($conn);
echo $affe;

if($res1){
    echo 'done';
}else{
    echo "not done";
}

?>