<?php
    session_start();
    echo $_SESSION['username'];
    echo "<br/>";
    echo $_SESSION['favCat'] ;

    echo "<br/>done";
?>