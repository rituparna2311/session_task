<?php
$arr=array("11","10","9","15","23","12");
$arrlength=count($arr);

echo "array is:".$arrlength;
 for($i=0;$i<$arrlength;$i++)
 {
	 for($j=($i+1);$j<$arrlength;$j++)
	 {
	 if($arr[$i]>$arr[$j])
	 {
		 $temp=$arr[$i];
		 $arr[$i]=$arr[$j];
		 $arr[$j]=$temp;
		 }
	
	 }
}
echo "<br>";
for($k=0;$k<$arrlength;$k++)
{
	echo "sorted array is:".$arr[$k];
	echo "<br>";
	}

?>
