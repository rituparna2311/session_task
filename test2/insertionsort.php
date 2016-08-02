<?php
$arr=array(5,1,-1,4,2);
$n=count($arr);

  for ($d = 1 ; $d <= $n - 1; $d++) {
    //$d = $c;
 
    while ( $d > 0 && $arr[$d] < $arr[$d-1]) {
      $t          = $arr[$d];
      $arr[$d]   = $arr[$d-1];
      $arr[$d-1] = $t;
 
      $d--;
    }
  }
 
  echo "Sorted list in ascending order.<br>";
 
  //for ($c = 0; $c <= $n - 1; $c++) {
    print_r($arr);
  
  ?>
