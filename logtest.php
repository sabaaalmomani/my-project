

<?php


    $nN = $_POST['name'];
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "newDB";
    $cdate = date('Y-m-d H:i:s');

    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{

          $sql = "SELECT * FROM user where names='$nN'";
        
      $user = $conn->query($sql) -> fetch_array(MYSQLI_ASSOC);

      if(isset($user)){

             $userid=$user["id"];

    
          if($user['passwords'] == $_POST['password']){

            header("Location: update.php?usid=".$userid);


          }else{
            header("Location: newlog.php?error=invalid_password");

          }

      }else{
          header("Location: newlog.php?error=invalid_username");
      }
      echo '<pre>';
         var_dump($user['passwords'],$_POST['password']);die;

  
        $conn->close();
  
  
    }
  
  ?>
  
  
  
