<?php
include("../protected/meta.php") ;
include("../protected/header.php");
?>

<div class="container">
    
    <form  method="post" action=""  style="max-width: 50%; padding: ;">
      <H3 style="text-align: center;">LOGIN AS CHAIRMAN</H3>
        <div class="mb-3 mt-3" data-validate="Valid email is required: ex@abc.xyz" >
          <label for="email" >Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
         
        </div>
        <div class="mb-3 ">
          <label for="Password">Password</label>
          <input type="password" class="form-control" id="pass" name="password" required>
          
          <a href="forgotpassword.php" style="text-align: right ; margin: 5px;" class="text-body">Forgot Password?</a>
        </div>
        




</div>