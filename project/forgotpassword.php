<?php
//print_r($_SERVER);
include("./public/meta.php") ;
include("./public/header.php");
?>


<body>
<img class="bg" src="./html/h2.jpg" alt="img">
<div class="container-fluid mt-5">
    
    <div class="row align-items-center" style="height: 100vh;">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <form method="post" action="navbar.html">
                <H3 style="text-align: center;">Forgot Password?</H3>
                <div class="mb-3" data-validate="Valid email is required: ex@abc.xyz" >
                  <label for="exampleInputEmail1" class="form-label align-items-center">Email address</label>
                  <input type="email" class="form-control" id="email" required>
                 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="pass"required>
                  
                </div>
               
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="pass"required>
                    
                  </div>

                
                <button type="submit" class="btn btn-primary" >Login</button>
                
            </form>
            <form  method="post" action="register.html">
            <button type="submit" class="btn btn-primary" >Register</button>
            </form>
    
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" >

</script>

<?php
include("./public/footer.php");
?>