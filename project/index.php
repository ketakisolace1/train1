<?php
include("./public/meta.php") ;
include("./public/header.php");

if (isset($_POST['submit'])) {
  $userName = $_POST['email'];
  $userPassword = $_POST['password'];
  
  
  $result=$auth->login($userName,$userPassword);

  if ($result) {
    
    
    $_SESSION['email'] = $userName;
    $_SESSION['password']=$userPassword;

    $row=$auth->type($userName,$userPassword);

    if(($row['lable']=="Admin")){
      header("location:dash.php");
    }elseif(($row['lable']=="Chairperson")){
      header("location:chairdash.php");
    }else{
      header("location:userdash.php");
    }} else {
       echo "Login failed";
       header("location:index.php");
       }
    }
  


?>
<div class="container">
<div class="container-fluid mt-5">
<div class="row align-items-center" style="height: 100vh;">
    
    <div class="mx-auto col-10 col-md-8 col-lg-6">
        
    <form  method="post" action=""  style="max-width: 50%; padding: ;">
      <H3 style="text-align: center;">LOGIN</H3>
        <div class="mb-3 mt-3" data-validate="Valid email is required: ex@abc.xyz" >
          <label for="email" >Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
         
        </div>
        <div class="mb-3 ">
          <label for="Password">Password</label>
          <input type="password" class="form-control" id="pass" name="password" required>
          
          <a href="forgotpassword.php" style="text-align: right ; margin: 5px;" class="text-body">Forgot Password?</a>
        </div>
        
        <div class="mb-3 form-check ">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Login" >
       

    </form>
  
   </div>
</div>  
</div>

</div>
