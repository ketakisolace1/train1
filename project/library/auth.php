<?php

class Auth{
    public $isloggedIn = false;
    function login($userName, $userPassword){
      global $conn;
      $sql ="SELECT * FROM user WHERE email='$userName' AND password='$userPassword'";
  
    $result = $conn->query($sql);
   //print_r($result);
   if ($result){
    $result = mysqli_query($conn, $sql);
    return $result;

   }
   }

   function type($userName, $userPassword){
      global $conn;
      $sql="SELECT lable FROM role AS r JOIN user AS u ON r.Id=u.rollId WHERE u.email='$userName' AND u.password='$userPassword'";
      $result=$conn->query($sql);
      $row= mysqli_fetch_assoc($result);
      return $row;
   }
}
?>










   