<?php
$arr=array(array(2,4,5),array(6,8,3),array(9,7,5));
$rcount=count($arr);
for($i=0;$i<$rcount;$i++)
{
	$ccount=count($arr[$i]);
	for($j=0;$j<$ccount;$j++)
	{
		echo $arr[$i][$j]." ";
	}
	echo "<br/>";
}
?>