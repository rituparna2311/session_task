<?php
$array=array('2','4','8','34','56');
$c=count($array);
$position=3;
$number=50;
	if($position==1){
		$new[0]=$number;
		for($j=1;$j<=$c;$j++){
			$new[$j]=$array[$j-1];
		}
	} else if($position>$c){
		$new=$array;
		$new[$c+1]=$number;
	} else{
		for($i=0;$i<$c;$i++){
			if($i==$position-1){
				$new[$i]=$number;
				$new[$i+1]=$array[$i];
			} else if($i<$position-1){
				$new[$i]=$array[$i];
			} else{
				$new[$i+1]=$array[$i];
			}
		}
	}
print_r($array);
print_r($new);
?>
