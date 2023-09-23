<?php
    echo "Function<br/>";

function totalMarks($marks){
    $sum =0;
    $i =1;
    foreach($marks as $value){
    $sum += $value;
    $i++;
    }
    return $sum/$i;
}

$abhay = array(50,40 ,40 ,30 ,78 ,89);
$sumMarks = totalMarks($abhay);

$vaibhav = array(50,40 ,90 ,90 ,78 ,89);
$sumMarksVaibhav = totalMarks($vaibhav);

echo "<br>Avg Marks Abhay = $sumMarks" ;
echo "<br>Avg Marks of Vaibhav  = $sumMarksVaibhav" ;
?>