<?php
    require 'connect.php';
    for ($j=1000; $j < 1500; $j++) { 
        
        $hash = password_hash("abhi$j" , PASSWORD_DEFAULT);
        $sql55 = "INSERT INTO `usersdetaild` (`name`, `email`, `username`, `password`, `currentdate`) VALUES ('abhay', 'abhay592004@gmail.com', 'abhi$j', '$hash', current_timestamp())";
        $res = mysqli_query($conn , $sql55);


        for ($i=0; $i < 100; $i++) { 
            
            
            $sql10 = "INSERT INTO `notes` (`username` ,`title` , `description`, `updateDate`) VALUES ( 'abhi$j','sdfds','bvhsdj', current_timestamp())";
            $res1 = mysqli_query($conn , $sql10);
        }
    }

?>