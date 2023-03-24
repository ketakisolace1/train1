<?php
include("./protected/meta.php") ;
include("./protected/header.php");


?>

<div class="container m-5">
<table class="table table-striped table-bordered border-dark table-hover">
    <tr class=" table-danger">
        <td> First Name</td>
        <td> Last Name </td>
        <td> Apartment Id</td>
        <!-- <td> Role Id</td> -->
        <td> Mark as chairperson</td>
       
    </tr>
    <?php
     $result= $main->list();
    if(!$result){
       echo "No results found";
   }else{
    while($row = $result-> fetch_array(MYSQLI_ASSOC)){  
          ?>
       
 <tr  class=" table-success">
    <td><?php echo $row["firstName"]; ?></td>
    <td><?php echo $row["lastName"]; ?></td>
    <td><?php echo $row["a_Id"]; ?></td>
    
    <td> <a href="update.php">click to add</a></td>
  </tr>

    
<?php } }
?>

</table>
</div>
