<?php
    require 'connect.php';
    session_start();
    if((!isset($_SESSION['loggedin'])) || (isset($_SESSION['loggedin']) != true)){
        header("location: login.php");
        exit;
    }
?>

<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = " DELETE FROM `notes` WHERE `sno` = $id ";
    $res = mysqli_query($conn , $sql);

    header("Location: index.php");
    exit();

}
?>