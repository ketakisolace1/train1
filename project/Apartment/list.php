<?php 
include("../protected/meta.php") ;
include("../protected/header.php");

?>
<div class="container m-5">
<table class="table table-striped table-bordered border-dark table-hover">
    <tr class=" table-success">
        <td> Apartment Name</td>
        <td> Address </td>
        <td> City</td>
        <td> State</td>
        <td> Country</td>
    </tr>
    <?php
     $result= $apt->list_apt();
     if(!mysqli_num_rows($result)){
        echo "No results found";
    }else{
    while($row = $result-> fetch_array(MYSQLI_ASSOC)){  
        
          ?>
       
 <tr  class=" table-warning">
    <td><?php echo $row["aptName"]; ?></td>
    <td><?php echo $row["aptAddress"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["state"]; ?></td> 
    <td><?php echo $row["country"]; ?></td> 
    
</tr>
    
<?php } }
?>

</table>
    </div>