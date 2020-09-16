
   
   
<?php


        $conn=new mysqli("localhost","root","root","newDB");
        
        
       //mysql_query('SET NAMES "utf8"');

         if(!isset($_GET['nOfpage']))
            $page=1;
        else
            $page=(int)$_GET['nOfpage'];

        $records_at_page=2;
        $q="SELECT * FROM user;";
        $data= $conn->query($q) -> fetch_all(MYSQLI_ASSOC);
        $records_count = sizeof($data);


        $pages_count=ceil($records_count/$records_at_page);

        if(($page > $pages_count || $page<=0)){
            $conn->close();
            die('no more pages');

        }
        
        $start=($page -1)*$records_at_page;
        $end=$records_at_page;

        if($records_count !=0){
            // $q=mysql_query("SELECT * FROM user LIMIT $start,$end");
            $q="SELECT * FROM user LIMIT $start,$end;";
            $data= $conn->query($q) -> fetch_all(MYSQLI_ASSOC);

            foreach($data as $value){
                echo $value['names'] .'<br/>';

            }

        }
        echo "<br/>";

       /*for($i=1;$i<=$pages_count;$i++){
              if($page==$i)
                    echo $page; 
                else
                   echo '<a href="multipages.php?nOfpage=' . $i . '">'.$i . '</a>';
               
                   
            if($i != $pages_count)    
                 echo '-';  } */


         $next=$page+1;
          $previous=$page-1;
         
          if($next<=$pages_count)
            echo '<a href="multipages.php?nOfpage=' . $next . '">next</a>';

          if(($next<=$pages_count) && ($previous>0))
            echo '-';     

          if($previous>0)
            echo '<a href="multipages.php?nOfpage=' . $previous . '">previous</a>';


            $conn->close(); 
 







    ?>
        