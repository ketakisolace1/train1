<?php
include("./protected/meta.php") ;
include("./protected/header.php");

if (isset($_POST['submit'])) {
    
    $rollId= $_POST['rollId'];
    

    $result= $main->editUser($firstName,$lastName,$a_Id); 
    
}
?>

<div class="container mt-5 ">
    <form action="" method="post" >
        <label class="form-control" for="ch">Mark As Chairperson</label>
        <br>
        <input type="radio"  name="rollId" value="yes" >Yes
        <input type="radio"  name="rollId" value="no" >No
        <button type="submit"class="form-control btn btn-primary">Save changes</button>
    </form>
</div>