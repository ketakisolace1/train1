<?php
include("../protected/meta.php") ;
include("../protected/header.php");

$a_Id= $_GET['chid'];

if(isset($_GET['uid'])){
    $u_Id= $_GET['uid'];
    $result1= $chair->delete($u_Id);
   }

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">List of Members</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
       
        <a class="nav-link" href="add.php">Add New Members</a>
        

        
      </div>
    </div>
  </div>
</nav>

<div class="container m-5">
    <table class="table table-striped table-bordered border-dark table-hover">
        <tr class=" table-danger">
            
            <td> First Name</td>
            <td> Last Name </td>
            <td> Email ID</td>
            <td> Created At</td>
            <td>Delete Member</td>
            <td>Update </td>
        </tr>
        <?php
        $result= $chair->list($a_Id);
        if(!mysqli_num_rows($result)){
            echo "No results found";
        }else{
            while($row = $result-> fetch_array(MYSQLI_ASSOC)){  ?>
            <tr  class=" table-success"> 
                
                <td><?php echo $row["firstName"]; ?></td>
                <td><?php echo $row["lastName"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["createdAt"]; ?></td>
                <td><button class="btn-danger btn" ><a href="delete.php? uid=<?php echo $row['Id']; ?>">Delete</a></td>
                <td><button class="btn-dark btn" ><a href="update.php? updateid=<?php echo $row['Id']; ?>">Update</a></td>
                
            </tr><?php } }
            ?>
    </table>
</div>


