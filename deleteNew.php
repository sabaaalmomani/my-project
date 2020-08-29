<?php

$conn=new mysqli("localhost","root","root","newDB");

$id=$_GET['usid'];

$id_select="SELECT * FROM user WHERE id=$id;";
$user=$conn->query($id_select) -> fetch_array(MYSQLI_ASSOC) ;

if(isset($_POST['delete']) && $user){

    $sqldelete="DELETE FROM user where id=$id;";



}

?>

<html>
<body>
<?php if($user){ ?>
    <form action="<?php $_SERVER['PHP SELF']?>" method="post">
        <input type="submit" name="delete" value="delete user">
    </form>
<?php } else {

    echo 'not exist';
}?>

</body>
</html>
