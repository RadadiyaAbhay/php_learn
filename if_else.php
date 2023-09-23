<?php
//if Else Condition


$a =45;
$b =55;
$c =45;


if($a < $b){
    if($a < $c){
        echo("A is Max");
    }else{
        echo("C is Max");
    }
}else{
    if($b < $c){
        echo("B is Max");
    }else{
        echo("C is Max");
    }
}


echo"<br>";
if($a > $b){
    echo("B");
}elseif($a<$c){
    echo("c");
}else{
    echo("A");
}

?>