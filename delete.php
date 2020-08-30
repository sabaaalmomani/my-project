
<?php


$conn = new mysqli('localhost', 'root', 'root', 'newDB');

$id=$_GET['usid'];

$sql_select= " SELECT * FROM user WHERE  id=$id; ";
$user = $conn->query($sql_select) -> fetch_array(MYSQLI_ASSOC) ;
     

      if(isset($_POST['delete']))
       {

      $sql_delete= " DELETE FROM user WHERE id=$id ;";

      $result2 =mysqli_query($conn,$sql_delete) or die(mysqli_error($conn));


        

        if($result2){
    
            echo 'user deleted';
        }
        
        else{
    
        echo 'user not deleted';
    }
        
}   



$conn->close();




?>

<html>
<body>
<?php if($user){  ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<input type="submit" name="delete" value="delete user">
</form>
<?php } else {
    echo 'not found';
} ?>

</body>
</html>
