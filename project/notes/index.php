<?php
include("../protected/meta.php") ;
include("../protected/header.php");
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Notice Board</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../project/index.php">Home page</a>
        <a class="nav-link" href="../notes/add.php">Add New Notes</a>
        <a class="nav-link" href="../notes/edit.php">Remove Notes</a>

        
      </div>
    </div>
  </div>
</nav>
<div class="container mt-7">
<table class="table">
  
  <thead>
    <tr>
     
      <th scope="col">Note Title</th>
      <th scope="col">Note Details</th>
      <th scope="col">Created At</th>
      <th scope="col">Created By</th>
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
        
        
        <td><?php echo $row["noteTitle"]; ?></td>
        <td><?php echo $row["noteDetails"]; ?></td>
        <td><?php echo $row["createdAt"]; ?></td>
        <td><?php echo $row["createdBy"]; ?></td>
        
        </tr>
        </tbody>
        <?php } }
?>
      </table>
    </div>
      
        