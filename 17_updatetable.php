<?php
$server = "localhost";
$username = "root";
$password = "prince311@A";
$db = "prince";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
    echo"Connection failed due to some error ". mysqli_connect_error();
}
else{
    echo "Connected Successfully";
}
echo"<br>";
$qry = "update ser set empname = 'prince' where empfat_name = 'kasish'";
$result = mysqli_query($conn,$qry);
echo "The number of record updated ".mysqli_affected_rows($conn);
echo"<br>";
if($result){
    echo"We updated the record successfully";
}
else{
    echo"Updation Failed";
}
?>