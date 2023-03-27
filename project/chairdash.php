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
   
    
   <div><a href="./chairperson/list.php? chid=<?php echo $result['a_Id']; ?> "> Get All Users</div>
   <div><a href="./chairperson/chnotes.php? ntid=<?php echo $result['a_Id']; ?>">Notifications</a></div>
   <div><a href=" logout.php">Logout</a></div>
  
</div>
</div>  