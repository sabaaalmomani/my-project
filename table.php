<?php
$conn = new mysqli('localhost', 'root', 'root', 'newDB');
$query="SELECT * FROM user;";
$result = $conn->query($query);

$conn->close();


?>




<html>
<title></title>

<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></head>
<body>





<table border="1px" align="center" style="width:600px; line-height:40px;" class="table table-bordered table-dark">
  
  <t>
    <th>id</th>
    <th>names</th>
    <th>email</th>
    <th>years</th>
    <th>gender</th>

</t>
<?php

    //  while($row=mysqli_fetch_assoc($result))
    foreach($result as $key => $row)
{

    // var_dump($user['id']);die;
?>
    <tr>
    <td><?=$row['id']?> </td>
    <td><?php echo $row['names'];?> </td>
    <td><?php echo $row['email'];?> </td>
    <td><?php echo $row['years'];?> </td>
    <td><?php echo $row['gender'];?> </td>
     </tr>


<?php

}

?>
</table>

</body>
</html>
