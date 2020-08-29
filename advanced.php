<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


/*
**fopen(name of file,mode)
modes:
r:read only[file must be exist] begning of file
r+:read an write 
w:write only open and clear the content ++++create the file if not exist
w+:the same of (w)but this read and write
a:write only  ,open and write to the end of file ++++ create the file if not exist
a+:   the same of  a  but this  write and read  
x:write only   create new file but if file exist    give error
x+: the same of  x   but this write and read 

**fread($filehandle,bytes)

**fwrite(handle,string,length)

*/
/*  HANDLE:
$filehandle=fopen('adv.txt','r');


$content=fread($filehandle,filesize('adv.txt'));
echo $content;
*/
try {

if($_SERVER['REQUEST_METHOD']=='POST'){
        $image=$_FILES['my-work'];
        print_r($image);


        $image_name=$_FILES['my-work']['name'];
        $image_type=$_FILES['my-work']['type'];
        $image_temp=$_FILES['my-work']['tmp_name'];
        $image_size=$_FILES['my-work']['size'];

        echo '<pre>';
        echo'image_name:' . $image_name.'<br>' ;
        echo'image_typ:' . $image_type.'<br>' ; 
        echo'image_temp:' . $image_temp.'<br>'; 
        echo'image_size:' . $image_size.'<br>' ; 
        echo '</pre>';
 
        



}
} catch(Exception $e) {

    var_dump('hree',$e->getErrors());die;
    
        }

?>

<form actiom=""  method="post" enctype="multipart/form-data">
<input type="file" name=" my-work">
<input type="submit"  value="upload">
</form>
