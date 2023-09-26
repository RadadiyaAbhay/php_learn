<?php

echo "Welcome Associative Array";
echo "<br/>";

$arr = array('Abhi' , 'abhay' , 'vaibhav');

echo $arr[0];

echo "<br/>";

$ar = array('abhay' => 'red' , 'vaibhav' => 'green');

echo $ar['abhay'];
echo "<br/>";
echo $ar['vaibhav'];

foreach($ar as $key => $value){
    echo '<br/>';
    echo $key ;
    echo '<br/>';
    echo $value ;
}
?>