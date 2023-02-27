

<?php
if(isset($_POST['Name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection Failed");

}
 $Name=$_POST['Name'];
 $Age=$_POST['Age'];
 $Gender=$_POST['Gender'];
 $Email=$_POST['Email'];
 $Phone=$_POST['Phone'];
 $desc=$_POST['desc'];

$sql= "INSERT INTO `park`.`park` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `conditions`, `dt`) VALUES ( '$Name', '$Age', '$Gender', '$Email', '$Phone', '$desc', current_timestamp());";

echo $sql;

 if($con->query($sql)==true){
    echo "Data Inserted";

 }

else{
    echo "Error";
}
$con->close();

}
?>




<!DOCTYPE html>
<html lang= "en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Welcome to Wonder Park</title>
        <link rel="stylesheet" href="new.css">

</head>
<body>
      <img class="bg" src="wp.jpg" alt="img">
      <div class="container">
       <h1> Welcome to Wonder Park Zone </h1>
       <p> Enter yourself to experience --</p>
       <form action="park.php" method="post">
         <input type="text" name="Name" id="name" placeholder="Enter Name" required>
         <input type="text" name="Age" id="age" placeholder="Enter Age" required>
         <input type="text" name="Gender" id="Gender" placeholder="Enter Gender" required>
         <input type="email" name="Email" id="Email" placeholder="Enter Email" required>
         <input type="phone" name="Phone" id="Phone" placeholder="Enter Phone number" required>
         <textarea name="desc" id="desc" cols="30" rows="10" placeholder="any medical conditions:"></textarea>
         <button class="btn">Submit</button>
         

       </form>

      </div>
<script src="index.js"></script>


</body>







</html>    