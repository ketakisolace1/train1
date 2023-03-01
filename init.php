<?php 

//INSERT INTO `adv` (`Srno`, `Name`, `Place`, `dt`) VALUES (NULL, 'Siya', 'Argentina', current_timestamp());

$servername="localhost";
$username="root";
$password="";
$database= "adventure";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("connection failed!");
}

else{
  echo("");
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Adventure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container my-3">
    <form>
        <h3 style="text-align: center;">Get Ready for Adventure</h3>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="place" class="form-label">Place</label>
    <input type="text" class="form-control" id="place" >
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Get Started</button>
</form>
</div>


<div class="container">
<?php


$sql= "SELECT * FROM `adv`";
$result= mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  echo $row['Srno'] . ". Name  " . $row['Name'] . "  Place is  " . $row['Place'];
  echo "<br>";
}

?>

</div>


</body>