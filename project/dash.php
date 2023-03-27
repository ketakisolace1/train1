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
   
   <div><a href="./user/userId.php"> Get user by ID </a></div>  
   <div><a href="./user/list.php"> Get All Users</div>
   <div><a href="./user/add.php">Add Users</div>
   <div><a href="./user/edit.php">Edit Profile</a>
   <div><a href="./Apartment/list.php">Get all Apartments</a></div>
   <div><a href="./Apartment/edit.php">Update Apartment</a></div>
   <div><a href="./notes/index.php">Notifications</a></div>
   <!--<div><a href="newch.php">New Chairperson</a></div>-->
   <div><a href=" logout.php">Logout</a></div>
  
</div>
</div>  
  

  
    

 


