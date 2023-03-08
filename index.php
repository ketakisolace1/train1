<?php
//print_r($_SERVER);
include("./public/meta.php") ;
include("./public/header.php");

if (isset($_POST['submit'])){
  $userName = $_POST['email'];
  $userpassword = $_POST['password'];
 $data= $auth->login($userName,$userpassword);
  echo "hello".$data;
  }

?>

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
          <input type="checkbox" class="form-check-input" id="exampleCheck1"required>
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Login" >
       

    </form>
  
   </div>
</div>  
</div>
<?php
 
include("./public/footer.php");

?>
