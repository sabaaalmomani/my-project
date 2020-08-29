<?php


   abstract class makeDevice
 {
      
    abstract public function testperformance();
    abstract public function verifyowner();
    abstract public function saywelcome($n);
}

   
class iphone extends makeDevice {


    public $owner;
    public $user;

    public function testperformance(){
    echo "testperformance is good";


    }


    public function verifyowner(){
        echo "verifyowner is good";
    
    
        }

        public function saywelcome($s){
            $this->owner=$s;
            echo 'welcome'  .$s;
        
        
            }
        
}

class ipad extends makeDevice {

     
    public $owner;

    public function testperformance(){
        echo "testperformance is good";
    
    
        }
    
    
        public function verifyowner(){
            echo "verifyowner is good";
        
        
            }
    
            public function saywelcome($n){
                $this->owner=$n;
                echo 'welcome'  . $n;
            
            
                }
            
    
}
 


 


$iphone=new iphone();
$iphone->saywelcome(sabaa);
echo '<pre>'; 
print_r($iphone);
echo '</pre>';




$ipad=new ipad();
$ipad->saywelcome(mohmm);

echo '<pre>'; 
print_r($ipad);
echo '</pre>';


?>