<?php
$arr=array(2,5,6,23);
$n=count($arr);
$position=1;
 echo $n."<br>";
   if ( $position >=$n+1 )
      echo "Deletion not possible."."<br>";
   else
   {
      for ( $c = $position - 1 ; $c < $n - 1 ; $c++ )
         $arr[$c] = $arr[$c+1];
 
      echo "Resultant array is<br>";
 
      //foreach($arr as $x => $x_value) 
      for( $c = 0 ; $c < $n - 1 ; $c++ )
       //echo "key=".$x. "value=" .$x_value;
           $arr1[$c]=$arr[$c];       
       
       print_r($arr1);
      
         //var_dump($arr);
         echo "<br>";
   }
   ?>
