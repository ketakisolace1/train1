<?php 
include("../protected/meta.php") ;
include("../protected/header.php");

?>

<div class="container m-5">
<table class="table table-striped table-bordered border-dark table-hover">
    <tr class=" table-danger">
        <td> First Name</td>
        <td> Last Name </td>
        <td> Email ID</td>
        <td> Created At</td>
       
    </tr>
    <?php
     $result= $main->list();
    if(!mysqli_num_rows($result)){
       echo "No results found";
   }else{
    
    while($row = $result-> fetch_array(MYSQLI_ASSOC)){  
          ?>
       
 <tr  class=" table-success">
    <td><?php echo $row["firstName"]; ?></td>
    <td><?php echo $row["lastName"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["createdAt"]; ?></td> 
</tr>
    
<?php } }
?>

</table>
    </div>