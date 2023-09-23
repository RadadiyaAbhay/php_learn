<?php
//operators in PHP


// arit , assign , compe ,logi 

$a = 12;
$b = 252;

// arit
echo "a =12 b =252";
echo "<br>";
echo "+ = ". $a + $b;
echo "<br>";
echo "- = ".$a - $b;
echo "<br>";
echo "* = ".$a * $b;
echo "<br>";
echo "/ = ".$a / $b;
echo "<br>";
echo "% = ".$a % $b;
echo "<br>";
echo "** = ".$a ** $b;

// assign
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "+= ". $a += $b;
echo "<br>";
echo "-= ".$a -= $b;
echo "<br>";
echo "*= ".$a *= $b;
echo "<br>";
echo "/= ".$a /= $b;
echo "<br>";
echo "%= ".$a %= $b;



// Compe

$c = 12;
$d = 22;
echo " c =12 d =22" ;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "== ". var_dump($c == $d);
echo "<br>";
echo ">= ". var_dump($c >= $d);
echo "<br>";
echo "<= ". var_dump($c <= $d);
echo "<br>";
echo "<> ". var_dump($c <> $d);


//logical

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "&&" .var_dump($c and $d);
echo "<br>";
echo "||" .var_dump($c or $d);
echo "<br>";
echo "!" .var_dump( !$d or $d);
echo "<br>";


?>