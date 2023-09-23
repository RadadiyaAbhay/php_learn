<?php
    echo 'Welcome local var';
    $a = 510;
    $b = 4654;

    function printV(){
        global $a ,$b;

        $a = 15646;

        echo "<br/>I am $a and I am $b";
    }

    printV();
    echo "<br/>$a";
?>