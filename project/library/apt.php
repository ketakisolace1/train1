<?php

class Apt{
 
    function add_apt($aptName,$aptAddress,$city,$state,$country){
        global $conn;
        $sql="INSERT INTO appt(aptName,aptAddress,city,state,country) VALUES ('$aptName','$aptAddress','$city','$state','$country')";
        
        $result= $conn->query($sql);
    }

    function list_apt(){
        global $conn;
        $sql="SELECT * FROM appt";
        $result= $conn->query($sql);
        return $result;
    }
    
    function editApt($aptName,$aptAddress,$city,$state,$country){
        global $conn;
    
        if(isset($_SESSION['email'])){
    
          $emailNew=$_SESSION['email'];
          
        } else{
          die("Error fetching Data");
        }
        
        $sql="UPDATE apt SET aptName='$aptName',aptAddress='$aptAddress',city= '$city',state='$state',country='$country' WHERE email='$emailNew'";
      
        $result= $conn->query($sql);
    }
}
?>