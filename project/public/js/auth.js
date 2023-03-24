<script>


</script>

if (isset($_POST['submit'])) {
    $userName = $_POST['email'];
    $userPassword = $_POST['password'];
  
    if( !empty($userName) || !empty($userPassword)) { 
      $error="Please insert proper Credentials";
    } else {
  
      $isVal = $auth->login($userName,$userPassword);
      if($isVal) {
  
        header('./dash.php');
      } else {
        $error="Incorrect Credentials";
      }
    }
  
  }
  
  ?>

  