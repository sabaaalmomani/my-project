<?php
$conn = new mysqli('localhost', 'root', 'root', 'newDB');


if(isset($_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['usid']))
{
    $id = $_GET['usid'];
    $sql_delete= " DELETE FROM user WHERE id=$id ;";
    
    $result2 =mysqli_query($conn,$sql_delete);

}   

$limit = 4;
$offset = 0;


$q="SELECT * FROM user;";
$data= $conn->query($q) -> fetch_all(MYSQLI_ASSOC);
$records_count = sizeof($data);

//var_dump(sizeof($data));die;
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    <th>Action</th>
    </t>

    
   <?php

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
    <!-- <td>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  delete
</button>
    </td> -->


    <td><a href="update.php">Update</a></td>

    <td><a href="<?=$_SERVER['PHP_SELF'].'?usid='.$row['id'].'&action=delete'?>">Delete</td>



     </tr>

     <?php

}

?>
</table>

     <nav aria-label="Page navigation example" >
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

























<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
        <a href="<?=$_SERVER['PHP_SELF'].'?usid='.$row['id'].'&action=delete'?>">
        <button type="button" class="btn btn-primary">del</button></a>
      </div>
    </div>
  </div>
</div>

<script>
$('#exampleModal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>





</body>

</html>