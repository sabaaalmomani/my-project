<?php


class appledevice {
        
         //properties
        public $ram='1GB';
        public $inch='4IN';
        public $space='16gb';
        public $color='silver';
        private $lock;
    
       //method
     public function changespec($ra,$in,$sp,$co){

        $this->ram      =$ra;
        $this->inch     =$in;
        $this->space   =$sp;
        $this->color   =$co;
     }
      
     public function changelock($lo){

       $this->lock=sha1($lo);
 
     }

     
    }

    $iphone6p = new appledevice();
    $iphone6p->changespec("2gb","5in","32gb","red");



    $iphone6p->changelock("sabaa@1234");//change lock just this way
     //$iphone6p->lock="sabaa1234";
     //echo  $iphone6p->lock;
    echo "<pre>";
    print_r($iphone6p);
    echo "</pre>";
   



    ?>
