<?php
include("../protected/meta.php") ;
include("../protected/header.php");

if (isset($_POST['submit'])) {
    
    $firstName= $_POST['firstName'];
    $lastName= $_POST['lastName'];
    $userName = $_POST['email'];
    $password = $_POST['password'];
    $a_Id = $_POST['a_Id'];

    $result= $chair->add($firstName,$lastName,$userName,$password,$a_Id); 
}

?>
<div class="container m-5">
    <form action="" method="post">
    <label for="firstName" >First Name:</label>
            <input type="text"class="form-control"name="firstName" require><br>

            <label for="lastName" >Last Name:</label>
            <input type="text"class="form-control"name="lastName"require><br>

            <label for="email" >Email:</label>
            <input type="text"class="form-control"name="email" require><br>

            <label for="email" >Password:</label>
            <input type="text"class="form-control"name="password" require><br>

            <label for="a_Id" >Appartment ID :</label>
            <input type="text"class="form-control"name="a_Id"require><br>

            <div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>

