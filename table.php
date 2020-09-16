<?php
$conn = new mysqli('localhost', 'root', 'root', 'newDB');


$limit = 4;
$offset = 0;


$q="SELECT * FROM user;";
$data= $conn->query($q) -> fetch_all(MYSQLI_ASSOC);
$records_count = sizeof($data);


$pages_count=ceil($records_count/$limit);
if(isset($_GET['page'])){
    $offset = $limit * ($_GET['page'] - 1);
}
$query = "SELECT * FROM user LIMIT $limit OFFSET $offset";
$result = $conn->query($query);

$conn->close();


?>




<html>
<title></title>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">


</head>


<body>





<table border="1px" align="center" style="width:600px; line-height:40px;" class="table table-striped table-dark">
  
  <t>
    <th>id</th>
    <th>names</th>
    <th>email</th>
    <th>years</th>
    <th>gender</th>
    <th>delete</th>

</t>
<?php

    //  while($row=mysqli_fetch_assoc($result))
    foreach($result as $key => $row)
{

    // var_dump($user['id']);die;
?>
    <tr>
    <td><?php echo $row['id'];?> </td>
    <td><?php echo $row['names'];?> </td>
    <td><?php echo $row['email'];?> </td>
    <td><?php echo $row['years'];?> </td>
    <td><?php echo $row['gender'];?> </td>
    <td><a href="delete.php?usid=<?=$row['id']?>">del</a> </td>

     </tr>
     <?php

}

?>
</table>

     <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?=$_GET['page'] == 1?'disabled':''?>">
      <a class="page-link" href="<?=$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)?>">previous</a> 
    </li>

    <?php
for($i=1;$i<=$pages_count;$i++){
    ?>
    <li class="page-item"><a class="page-link" href="<?=$_SERVER['PHP_SELF']."?page=".$i?>"><?=$i?></a></li>


    <?php
}
?>

    <li class="page-item <?=$_GET['page'] == $pages_count?'disabled':''?>">
      <a class="page-link"   href="<?=$_SERVER['PHP_SELF']."?page=".($_GET['page']+1)?>">Next</a>
    </li>
  </ul>
</nav>







</body>
</html>
