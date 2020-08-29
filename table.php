
<?php
$conn = new mysqli('localhost', 'root', 'root', 'newDB');
$query="SELECT * FROM user;";
$result = $conn->query($query);

$conn->close();


?>




<html>
<title>
<head>Data from database</head>
</title>
<body>





<table border="1px" align="center" style="width:600px; line-height:40px;">
  
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
