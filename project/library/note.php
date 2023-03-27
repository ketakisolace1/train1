<?php
class note{
    function add($noteTitle,$noteDetails){
        global $conn;
        $sql="INSERT INTO note(noteTitle,noteDetails) VALUES ('$noteTitle','$noteDetails')";
        $result= $conn->query($sql);
    }

    function list(){
        global $conn;
        $sql="SELECT * FROM note";
        $result= $conn->query($sql);
        //$row3= mysqli_fetch_assoc($result3);
        return $result;
    }

    function delete($Id){ 
        global $conn;
        $sql="DELETE FROM note WHERE Id='".$Id."'";
        $result= $conn->query($sql);
        
        return $result;
    }

    function update($noteTitle,$noteDetails,$id){ 
        global $conn;
        
        $sql="UPDATE note SET noteTitle='$noteTitle',noteDetails='$noteDetails' where Id=$id";
        $result= $conn->query($sql);
        
        return $result;
    }


}

?>