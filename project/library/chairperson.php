<?php
Class Chairperson{

    function list($a_Id){
        global $conn;
        $sql="SELECT * FROM user WHERE a_Id=$a_Id ";
        $result= $conn->query($sql);
        //$row3= mysqli_fetch_assoc($result3);
        return $result;
    }
    function delete($u_Id){ 
        global $conn;
        $sql="DELETE FROM user WHERE Id='".$u_Id."'";
        $result= $conn->query($sql);
        
        return $result;
    }
    function Update($firstName,$lastName,$userName,$password,$u_Id){ 
        global $conn;
        
        $sql="UPDATE user SET firstName='$firstName',lastName='$lastName',email='$userName',password='$password' where Id=$u_Id";
        $result= $conn->query($sql);
        
        return $result;
    }
    function add($firstName,$lastName,$userName,$password,$a_Id){
        global $conn;
        $sql4="INSERT INTO user(firstName,lastName,email,password,a_Id) VALUES ('$firstName','$lastName','$userName','$password',$a_Id)";
        
        $result4= $conn->query($sql4);
    }
    function list_note($a_Id){
        global $conn;
        $sql="SELECT * FROM note WHERE aptId= $a_Id ";
        $result= $conn->query($sql);
        //$row3= mysqli_fetch_assoc($result3);
        return $result;
    }
    function addnote($noteTitle,$noteDetails,$a_id){
        global $conn;
        $sql="INSERT INTO note(noteTitle,noteDetails,aptId) VALUES ('$noteTitle','$noteDetails',$a_id)";
        $result= $conn->query($sql);
    }
    function deletenote($delId){ 
        global $conn;
        $sql="DELETE  FROM note WHERE Id='".$delId."'";
        $result= $conn->query($sql);
        
        return $result;
    }
    function updatenote($noteTitle,$noteDetails,$id){ 
        global $conn;
        
        $sql="UPDATE note SET noteTitle='$noteTitle',noteDetails='$noteDetails' where Id=$id";
        $result= $conn->query($sql);
        
        return $result;
    }
    

   
    

}
 ?>