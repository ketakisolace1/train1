<?php 
include("../protected/meta.php") ;
include("../protected/header.php");

if (isset($_POST['submit'])) {
    $aptName= $_POST['aptName'];
    $aptAddress= $_POST['aptAddress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $result= $apt->add_apt($aptName,$aptAddress,$city,$state,$country);
}

?>

<div class="container mb-5">
    <h2>Add New Apartment:</h2>
    <div>
        <form method="post" action="">
            
          <label for="aptName" > Apartment Name:</label>
            <input type="text"class="form-control"name="aptName" require><br>

            <label for="aptAddress" >Apartment Address:</label>
            <input type="text"class="form-control"name="aptAddress"require><br>

            <label for="city" >City:</label>
            <input type="text"class="form-control"name="city" require><br>

            <label for="state" >State:</label>
            <input type="text"class="form-control"name="state"require><br>

            <label for="country" > Country:</label>
            <input type="text"class="form-control"name="country"require><br>
            <div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>