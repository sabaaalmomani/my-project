




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
$user = $conn->query($sql_select)->fetch_array(MYSQLI_ASSOC);;

$conn->close();

?>







 
<html>
<body>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">


</head>
<title> PHP UPDATE DATA </TITLE>


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
<a href="table2.php"  class="btn btn-dark">Back</a>

</form>

</body>

</html>