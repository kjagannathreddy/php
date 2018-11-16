<?php
class add
{
	function sum($a,$b)
	{
		$sum=$a+$b;
		return $sum;
	}
}
$obj=new add;
echo $obj->sum(100,20);
?>