  <?php


class appledevice {
        
         //properties
        public $ram='1GB';
        public $inch='4IN';
        public $space='16gb';
        public $color='silver';
        public $ownerName;

    //constant
    const OWNERCHARS =5;

      //method
        public  function setownerName(){

            if(strlen($this ->ownerName) < self::OWNERCHARS)

            {  echo 'invalid name because less than'.self::OWNERCHARS;

            }
             
             else
             

            {
                echo 'your name has been set';
            }

            }



}//class

$iphone6p=new appledevice();//object 
$iphone6p->ram='4gb';
$iphone6p->inch='5.5in';
$iphone6p->space='265gb';
$iphone6p->color='red';
$iphone6p->ownerName='sabaaalmomani';
$iphone6p->setownerName();
//echo  appledevice :: OWNERCHARS ;
    echo "<pre>";

var_dump($iphone6p);

echo "</pre>";


$iphone7p=new appledevice(); //object 
$iphone7p->ram='32gb';
$iphone7p->inch="6.5in";
$iphone7p->space="244gb";
$iphone7p->color="blue";

echo "<pre>";

var_dump($iphone7p);


echo "</pre>";



?>