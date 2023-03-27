<?php 
include("../protected/meta.php") ;
include("../protected/header.php");

if(isset($_GET['a_Id'])){
    $a_Id= $_GET['a_Id'];
    $result1= $apt->delete($a_Id);
   }

?>


<div class="container m-5">
<table class="table table-striped table-bordered border-dark table-hover">
    <tr class=" table-success">
        <td> Apt Id</td>
        <td> Apartment Name</td>
        <td> Address </td>
        <td> City</td>
        <td> State</td>
        <td> Country</td>
        <td>Delete</td>
    </tr>
    <?php
     $result= $apt->list_apt();
     if(!mysqli_num_rows($result)){
        echo "No results found";
    }else{
    while($row = $result-> fetch_array(MYSQLI_ASSOC)){  
        
          ?>
       
 <tr  class=" table-warning">
    <td><?php echo $row["a_Id"]; ?></td>
    <td><?php echo $row["aptName"]; ?></td>
    <td><?php echo $row["aptAddress"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["state"]; ?></td> 
    <td><?php echo $row["country"]; ?></td> 
    <td><button class="btn-danger btn" ><a href="edit.php?id=<?php echo $row['a_Id']; ?>">Delete</a></td>
    <td><button class="btn-success btn" ><a href="update.php?updateid=<?php echo $row['a_Id']; ?>">Update</a></td>
        
</tr>
    
<?php } }
?>

</table>
    </div>