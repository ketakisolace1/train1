<?php
include("../protected/meta.php") ;
include("../protected/header.php");

if(isset($_GET['id'])){
    $Id= $_GET['id'];
    $result1= $note->delete($Id);
  }
   
?>
<div class="container mt-7">
<table class="table">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Note Title</th>
      <th scope="col">Note Details</th>
      <th scope="col">Created At</th>
      <th scope="col">Operation</th>
      
    </tr>
  </thead>
  <?php
     $result= $note->list();
     if(!mysqli_num_rows($result)){
        echo "No results found";
    }else{
    while($row = $result-> fetch_array(MYSQLI_ASSOC)){
      ?>
      <tbody>
        <tr>
        
        <td><?php echo $row["Id"]; ?></td>
        <td><?php echo $row["noteTitle"]; ?></td>
        <td><?php echo $row["noteDetails"]; ?></td>
        <td><?php echo $row["createdAt"]; ?></td>
        <td><button class="btn-danger btn" ><a href="edit.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
        <td><button class="btn-success btn" ><a href="update.php?updateid=<?php echo $row['Id']; ?>">Update</a></td>
        
        </tr>
        </tbody>
        <?php } }
?>
      </table>
    </div>
      
    

        