<?php

// ini_set('display_errors',1);
// error_reporting(E_ALL);

// var_dump(phpinfo());die;
interface mobile{

    public function presshome();
}

class iphone implements mobile{

public $name;
public function presshome(){
    echo 'show all apps are open';
        echo 'show all apps are open';



}

}


class sony {

public $name;
public function presshome(){
    echo 'close all apps done';}

}

$iphone=new iphone();
$iphone -> presshome();
echo "<pre>"; print_r($iphone); echo "</pre>";



$sony=new sony();
$sony->presshome();
echo "<pre>"; print_r($sony); echo "</pre>";


?>
