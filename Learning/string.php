<?php
    $a = 'My Name Is Abhay';

    echo $a;
    echo "<br>";
    echo "String len = " . strlen($a);
    echo "<br>";
    echo "String rev = " . strrev($a);
    echo "<br>";
    echo str_word_count($a);
    echo "<br>";
    echo "String pos = " . strpos($a , "Is");
    echo "<br>";
    echo str_replace("Abhay" , "Abhi" ,$a);
    echo "<br>";
    echo str_repeat($a, 2);
    echo "<br>";
    echo "<pre> ";
    echo rtrim("     I am good Boy     ");
    echo "<br>";
    echo ltrim("    I am good Boy      ");
    echo "</pre> ";


?>