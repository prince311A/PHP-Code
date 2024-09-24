<?php
$server = "localhost";
$username = "root";
$password = "prince311@A";
$db = "prince";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed due to ". mysqli_connect_error());
}
else{
 //   echo"Connected successfully";
}
$qry = "select * from ser";
$result = mysqli_query($conn,$qry);
//  Now find number of record in table
echo mysqli_num_rows($result);
echo "<br>";
$num = mysqli_num_rows($result); // value of rows in table
// if($num>0){
//    $n $row =  mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row =  mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row =  mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
// }
//To Show results
while($row = mysqli_fetch_assoc($result)){
    echo $row['empid']."    ".$row['empname']."    ".$row['empfat_name']."          ".$row['marks'];
    echo "<br>";

}

?>