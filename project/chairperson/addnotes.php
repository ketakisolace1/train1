<?php 
include("../protected/meta.php") ;
include("../protected/header.php");
if (isset($_POST['submit'])) {
    $noteTitle= $_POST['noteTitle'];
    $noteDetails= $_POST['noteDetails'];
    $a_id=$_POST['a_id'];
    $result=$chair->addnote($noteTitle,$noteDetails,$a_id); 

}
?>
<div class="container mt-5">

    <form action="" method="post">
        <form>
            
            <div class="form-group">
                <label for="noteTitle"> Add Note Tile</label>
                <input type="text" class="form-control" name="noteTitle" id="noteTitle">
                <label for="note"> Add Note Details</label>
                <textarea class="form-control" rows="3" name="noteDetails" ></textarea>
                <label for="a_id"> Apartment Id</label>
                <input type="text" class="form-control" name="a_id" id="a_id">
                
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary" name="submit">Submit Note</button>
            </div>
        </form>
    </form>
</div>