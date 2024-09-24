<?php
$twodim = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(1,7,8,9)
);
echo "The given matrix is::<br>";
for ($i=0; $i <count($twodim) ; $i++) { 
    for ($j=0; $j <count($twodim[$i]) ; $j++) { 
        echo $twodim[$i][$j];
    }
    echo"<br>";
}
?>
