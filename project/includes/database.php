<?php


global $conn ;
$conn = mysqli_connect(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME);

if(!$conn){
  die("connection failed!");
}

else{
  echo("");
}


?>