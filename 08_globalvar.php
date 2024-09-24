<?php
//Global And Local variables
$a = 10;
$b = 20;
//echo "<br>";
echo "The global1 variables are".$a, $b;
function localvar(){
    $a = 100;
    $b = 200;
    global $a,$b; // Gives the value of global varible by using global keyword by use of this we can change the global varible permanently
    echo "<br>";
    echo "The local varibles are".$a,$b;
    echo "<br>";
}
localvar();
// After the change
echo "The global2 variables are $a,$b";
?>