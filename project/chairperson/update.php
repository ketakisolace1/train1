<?php
include("../protected/meta.php") ;
include("../protected/header.php");

if (isset($_POST['submit'])) {
    $u_Id=$_GET['updateid'];
    $firstName= $_POST['firstName'];
    $lastName= $_POST['lastName'];
    $userName = $_POST['email'];
    $password = $_POST['password'];
    

    $result= $chair->update($firstName,$lastName,$userName,$password,$u_Id); 
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

            <div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>

