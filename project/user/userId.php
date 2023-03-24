<?php
//echo $_SERVER['DOCUMENT_ROOT']./project/protected/header.php;
include("../protected/meta.php");
include("../protected/header.php") ;


 
?>   

<br>
<div class="container ml-5">
    <form method="POST" action=" ">
        <input type="text" name="id" placeholder="Insert Id">
        <input name="submit" type="submit" value="Search"/>
    </form>
</div>
<br>
<?php
if(isset($_POST['submit'])){
    $uid= $_POST['id'];

$result= $main->get($uid);
}
?>
<div class="container mt-5"> 
<table class="table table-bordered border-dark">
    <tr class="table-success border-dark">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email ID</th>
    </tr>
    <tbody>
        <?php
        if(!empty($result)){
            ?>
            <tr class="table-info border-dark">
                <td><?php echo $result["firstName"] ; ?></td>
                <td><?php echo $result["lastName"] ; ?></td>
                <td><?php echo $result["email"] ; ?></td>
            </tr>
            <?php } ?>   
        </tbody>
    </table>
</div>
        

            
 