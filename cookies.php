<?php
$cookie_name="userid";
$value="123";
$exp=time()+(60*60*24*30);

//executed  response from server to user
setcookie($cookie_name, $value, $exp); 

if(!isset($_COOKIE['userid'])) {
//echo  print_r($_COOKIE);
echo  $_COOKIE['userid'];//executed when data passes from user to server
//delete cookie :setcookie($name,NULL);
}
?>