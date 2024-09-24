<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> fitness</title>
</head>
<link rel="stylesheet" href="css/style.css">
<style>
    /* css reset*/
    body {
        font-family: 'baloo bhai', cursive;
        /* color: white; */
        margin: 0px;
        padding: 0px;
        background: url('https://th.bing.com/th/id/R.bec56a4f299b83c0e884dc552328d51b?rik=lH48ch3G8PMm1A&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2fe%2f0%2f2%2f200548.jpg&ehk=rsCiPUmoO0e8yuiDrcq9GNOFwanE359f09q1UXbQ%2fzY%3d&risl=&pid=ImgRaw&r=0');
    }


    .left {
        display: inline block;
        /* border:2px solid yellow ;  */
        position: absolute;
        left: 60px;
        top: 20px;
    }

    .left img {
        width: 160px;
        filter: invert(0%);
    }

    .left div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    }

    .mid {
        display: block;
        width: 64%;
        margin: 29px auto;
        border:2px soild green; 
    }

    .right {
        position: absolute;
        right: 34px;
        top: 43px;
        display: inline-block;
         /* border: 2px solid yellow ; */
    }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: 25px;
    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 34px 23px;
    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: grey;
    }

    .btn {
        font-family: 'baloo bhai', cursive;
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 14px;
        border: 2x soid rgb(90, 88, 88);
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(8, 8, 8);
    }

    .container {
        border: 2px solid white;
        margin: 106px 80px;
        padding: 75px;
        width: 35%;
        border-radius: 80px;
    }

    .form-group input {
        font-family: 'baloo bhai', cursive;
        text-align: center;
        display: block;
        width: 508px;
        padding: 1px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 25px;
        border-radius: 8px;
    }

    .container h1 {
        text-align: center;
    }

    .container button {
        display: block;
        width: 74%;
        margin: 20px auto;
    }
</style>

<body>
<?php
    $server = "localhost";
    $username = "root";
    $password = "prince311@A";
    $db = "aman";
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn = mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        echo"Connection Failed Due to ". mysqli_connect_error();
    }
    else{
        // echo "Successfully Connected";
        $qry = "insert into fitness (name,age,gender,address,email,phone) value('$name','$age','$gender','$address','$email','$phone')";
        $result = mysqli_query($conn,$qry);
        if($result){
          echo  "<script>alert('Your Information Submitted Succesfully Thankyou!!')</script>";

}
else{
    // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);

    echo  "<script>alert('Sorry Information Not be Submitted')</script>";

}
        }
    }
    ?>
    <header class="header">
        <!-- left box for logo -->
        <div class="left">
            <img src="https://sfondo.info/i/original/9/3/c/32001.jpg" alt="gymboy">
            <div><b>fitness freak</b></div>
        </div>
        <!-- mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Fitness calculator</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <!-- right box for buttons -->
        <div class="right">
            <button class="btn">Call Us NOW</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h1>join the best gym of rewa now</h1>
        <form action="/phpt/phpt/18_vanda.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter youe name">
            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Enter your Gender">
            </div>
            <div class="form-group">
                <input type="text" name="address" placeholder="Enter your Locality">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Email id">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Enter your Phone.no">
            </div>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>


</html>