
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>FEEDBACKFORM!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Street Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/phpt/phpt/15_form.php">Menu<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Address</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){ // always in capital letters
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['feedback'];
//Connecting to databases
$server = "localhost";
$username = "root";
$password = "prince311@A";
$db = "aman";
$conn = mysqli_connect($server,$username,$password,$db);
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 $qry = "insert into feedtb (name,email,descrp) values ('$name','$email','$desc')";
 $result = mysqli_query($conn,$qry);
if($result){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your entry has been submitted successfully!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>';
}
else{
    // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>';
}

}
}

?>
  <div class="container mt-3">
        <h1>Please Give Us Your Feedback</h1>
        <form action="/phpt/phpt/15_form2.php" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" id ="name" name ="name" class = "form-control">
            </div>
  <div class="form-group">
    <label for="email"class="form-label" >Email address</label>
    <input type="email" id="email" class="form-control" name = "email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="feedback" class="form-label">Enter Feedback</label>
   <textarea class = "form-control"name="feedback" id="feedback" cols="30" rows="10"></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>

