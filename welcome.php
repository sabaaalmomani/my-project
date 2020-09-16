<html>
<head>
</head>
<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$data = $_POST;


foreach($data as $key => $value) 
{
  if($key == 'passwords'){
    echo $key." = *******";
  }

  else{
  echo  $key." = ".$value;

  }
  echo "<br>";

}


//var_dump($_POST['gender']);die;
// var_dump($_POST['years']);die;



$error = false;



foreach($data as $key => $value){
    switch($key){
        case "name":
        
      
          if(empty($value))
          {
            $nameError="please fill this field";
            $error = true;
          }
          elseif (!preg_match("/^[a-zA-Z ]*$/",$value))
           {
            $nameError = "Only letters and white space allowed";
            $error = true;

            }else{
            $names=valid_input($data["name"]);
            $nameValid = "success name";
            }
           break;
        case "password":
          if(empty($value))
          {
            $passwordError="please fill password";
            $error = true;

          }
            else if (strlen($data["password"]) <= '8') 
            {
              $passwordError = "Your Password Must Contain At Least 8 Characters!";
              $error = true;

            }
            else
            {
              $password_user=valid_input($data["password"]);
              $passvalid = "success password";

            }
          break;

         case "email":

          if(empty($value)){
            $emailError="please fill  Ur email";
            $error = true;

           }
           elseif(!preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#',$value))
          {
            $emailError="please check the entered email";
            $error = true;

          }
            else {
              $email=valid_input($data["email"]);
              $emailvalid="success Email";
            }
          break;
          case "gender":
        
      
            if(empty($value))
            {
              $GError="please select you gender";
              $error = true;
            }else{
              $gender = $value;
            }
          break;
          case "years":
        
      
            if(empty($value))
            {
              $YError="please select year";
              $error = true;
            }else{
              $year = $value;
            }
          default:
          break;

    }     


}







function valid_input($data){
$data=trim($data);
$data=stripcslashes($data);
$data=htmlspecialchars($data);
return $data;

}


if($error)
{
  // die("here");
    header("Location: index.php?nE=".$nameError.
    "&n=".$data['name'].
    "&nV=".$nameValid.
    "&eE=".$emailError.
    "&e=".$data['email'].
    "&eV=".$emailvalid.
    "&pE=".$passwordError.
    "&p=".$data['password'].
    "&pV=".$passvalid
    

    );
}else{
  $servername = "localhost";
  $username = "root";
  $password_db = "root";
  $dbname = "newDB";
  $cdate = date('Y-m-d H:i:s');

  $conn = new mysqli($servername, $username, $password_db, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{

    $sql = "INSERT INTO user (names,email,cdate,passwords, years,gender)
          VALUES ('$names' ,'$email','$cdate','$password_user','$year','$gender')";

      if ($conn->query($sql) === TRUE) {

            header("Location: newlog.php ");

          }

  else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }


      $conn->close();


  }
}

?>



</body>
</html>