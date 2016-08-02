<?php
$arr=array(12,13,34,23,45,56);
$n=count($arr);

$position=4;


if($position>$n+1)
{
	echo "out of range";
	}
else
{
	$c=$position-1;
	
	while($c<=$n)
	{
	
		//$temp2=0;
		if($c==$position-1)
		{
	    $temp1=$arr[$c];
		$arr[$c]=67;
	    }
	    else
	    {
			
			$temp2=$arr[$c];
			//echo $temp2."<br>";
			$arr[$c]=$temp1;
			$temp1=$temp2;
			}
				
		$c++;
		}
}
    
	 print_r($arr);	
?>
