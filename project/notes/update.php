<?php
include("../protected/meta.php") ;
include("../protected/header.php");

if (isset($_POST['submit'])) {
    $noteTitle= $_POST['noteTitle'];
    $noteDetails= $_POST['noteDetails'];
    $result=$note->update($noteTitle,$noteDetails); 

}
   
    
?>
<div class="container mt-5">

<form action="" method="post">
    <form>
        
        <div class="form-group">
            <label for="noteTitle"> Update Note Tile</label>
            <input type="text" class="form-control" name="noteTitle" id="noteTitle">
            <label for="note"> Update Note Details</label>
            <textarea class="form-control" rows="3" name="noteDetails" ></textarea>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary" name="submit">Update Note</button>
        </div>
    </form>
</form>
</div>
