<?php

class User{
  function get_mainData(){
    global $conn;
    if(!$conn){
      die("connection failed!");
    }
    if(isset($_SESSION['email']) && isset($_SESSION['password'])){
      $user = $_SESSION['email'];
      $pas =  $_SESSION['password'];
    }
    $sql= "SELECT * FROM user WHERE email='$user' AND password='$pas'";
    $result1= $conn->query($sql);
    $row1= mysqli_fetch_assoc($result1);
    return $row1;
  }

  function get($userId){
    global $conn;

    $sql2="SELECT * FROM user WHERE id='$userId'";
    $result2= $conn->query($sql2);
    $row2= mysqli_fetch_assoc($result2);
    return $row2;
  }

  function list(){
    global $conn;
    $sql3="SELECT * FROM user";
    $result3= $conn->query($sql3);
    //$row3= mysqli_fetch_assoc($result3);
    return $result3;
  }
  
  function add($firstName,$lastName,$userName,$password,$a_Id){
    global $conn;
    $sql4="INSERT INTO user(firstName,lastName,email,password,a_Id) VALUES ('$firstName','$lastName','$userName','$password',$a_Id)";
    
    $result4= $conn->query($sql4);
  }

  function editUser($firstName,$lastName,$a_Id){
    global $conn;

    if(isset($_SESSION['email'])){

      $emailNew=$_SESSION['email'];
      
    } else{
      die("Error fetching Data");
    }
    
    $sql5="UPDATE user SET firstName='$firstName',lastName='$lastName',a_Id= $a_Id WHERE email='$emailNew'";
  
    $result5= $conn->query($sql5);
    
  }
  function chairperson($value){
    global $conn;
    
    $sql="UPDATE user SET rollId= 2 WHERE email='$value' ";
    $result= $conn->query($sql);
  }
}
?>
        
          

        
        
        
        