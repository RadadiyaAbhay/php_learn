<?php

echo "This While Loops<br>";

$i =0;

while($i<=50){
    echo $i;
    echo "<br>";
    $i+=2;

}

echo "<br>This For Loops<br><br>";

$v;
$j;

for($v=1 ; $v<=5 ; $v++){
    for($j=1 ; $j<=$v ; $j++){
    echo $j;
    }
    echo "<br>";
}

echo "<br>This do while Loops<br><br>";

$l =0;

do{
    echo $l;
    echo "<br>";
    $l+=2;

}while($l<=50);
?>