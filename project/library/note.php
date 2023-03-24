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

    function update($noteTitle,$noteDetails){ 
        global $conn;
        if(isset($_SESSION['email'])){
            $emailNew=$_SESSION['email'];
            
          } else{
            die("Error fetching Data");
          }
        $sql="UPDATE note SET noteTitle='$noteTitle',noteDetails='$noteDetails'";
        $result= $conn->query($sql);
        
        return $result;
    }


}

?>