




<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "newDB";

$conn = new mysqli($servername, $username, $password, $dbname);


$id=$_GET['usid'];
//var_dump($_GET['usid']);die;
if(isset($_POST['update'])){

    $names=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    
    
    
    $sql_ubdate= " UPDATE user SET names='$names' , email='$email' , gender='$gender'   WHERE  id=$id ";

    $result =mysqli_query($conn,$sql_ubdate) or die(mysqli_error($conn));
    
    if($result){
    
        echo 'data updated';
    }
    
    else{
    
        echo 'data  not updated';
    }
    
    
    }

$sql_select= " SELECT * FROM user WHERE  id=$id; ";
$user = $conn->query($sql_select) -> fetch_array(MYSQLI_ASSOC) ;

$conn->close();

?>







 
<html>
<body>
<head>
<title> PHP UPDATE DATA </TITLE>
</head>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
Name to ubdate:
<input type="text" name="name" id="name" value=<?=$user['names']?> > 

<br><br>
 new E-mail:
<input  type="email" name="email" value=<?=$user['email']?> >
<br><br>

 new Gender:
<input type="radio" <?=($user['gender'] == 'male')?"checked='checked'":""?> id="male" name="gender" value="male"> Male
<input type="radio" <?=($user['gender'] == 'female')?"checked='checked'":""?> id="female" name="gender" value="female">female
<br> 
<input type= "submit" name="update" value="update data" >

</form>

</body>

</html>