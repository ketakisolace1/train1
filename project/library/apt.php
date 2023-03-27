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
    
    function update($aptName,$aptAddress,$city,$state,$country,$a_Id){
        global $conn;
        
        $sql="UPDATE appt SET aptName='$aptName',aptAddress='$aptAddress',city= '$city',state='$state',country='$country' WHERE a_Id= $a_Id";
      
        $result= $conn->query($sql);
    }
    
    function delete($a_Id){ 
        global $conn;
        $sql="DELETE FROM appt WHERE a_Id='".$a_Id."'";
        $result= $conn->query($sql);
        
        return $result;
    }
}
?>