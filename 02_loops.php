<?php
// While loops in php
$a = 0;
while($a<3){
    echo"This is while loop ";
    echo ($a+1);
    echo "<br>";
    $a++;
}
// DO while loops in php
$u = 0;
do{
    echo"This is do while loop ";
    echo ($u+1);
    echo "<br>"; 
    $u++;
}while($u<5);
// For loops in php
for($i=0;$i<4;$i++){
    echo "This is for loop ";
    echo ($i+1);
    echo "<br>";
}
?>