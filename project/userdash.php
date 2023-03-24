<?php

//print_r($_SERVER);
include("./public/meta.php") ;
include("./protected/header.php");


?>

<div class="container">
   <div class ="sidebar">
 <div>Welcome 
 <?php
 $result= $main->get_mainData();
    echo $result["firstName"] ;
    ?>
  </div>
   

   
   <div><a href="./Apartment/list.php">Get all Apartments</a></div>
   <div><a href="./notes/notesUser.php">Notifications</a></div>
   <div><a href=" logout.php">Logout</a></div>
  
</div>
</div>  