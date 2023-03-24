<?php 
include("../protected/meta.php") ;
include("../protected/header.php");

if (isset($_POST['submit'])) {
    
    $firstName= $_POST['firstName'];
    $lastName= $_POST['lastName'];
    $a_Id = $_POST['a_Id'];

    $result= $main->editUser($firstName,$lastName,$a_Id); 
    
}
?>


<div class="container mb-5 ">
    <div class="container-fluid mt-3">
        <h3>Update Your Details Bellow: </h3>
    <form method="post" action="">
        <label for="firstName" >First Name:</label>
            <input type="text"class="form-control"name="firstName" require><br>
            <label for="lastName" >Last Name:</label>
            <input type="text"class="form-control"name="lastName"require><br>
            <label for="a_Id" >Appartment ID :</label>
            <input type="text"class="form-control"name="a_Id"require><br>
            <div>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </lable>
    </form>
</div>