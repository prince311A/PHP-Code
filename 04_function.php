<?php
//Function in php 
function totalmarks($marks){
    $sum = 0;
    foreach ($marks as $value) {
        $sum = $sum+$value;
    }
    return $sum;
}
function avgmarks($marks){
    $sum = 0;
    $i =1;
    foreach ($marks as $value) {
        $sum = $sum+$value;
        $i++;
    }
    return $sum/$i;
}
//$primarks = array(44,98,85,60,89);
$primarks = [44,98,85,60,89]; // Same work
$sumofmarks = totalmarks($primarks);
$avgofmarks = avgmarks($primarks);
echo "The total marks of Pri is $sumofmarks <br>";
echo "The average marks of Pri is $avgofmarks <br>";
?>