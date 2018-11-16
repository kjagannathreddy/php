<?php
//$a=$_POST['a'];
//$b=$_POST['b'];
/**********or********/
extract($_POST);
if(isset($add))
{
	if(is_numeric($a) && is_numeric($b))
	{
		$sum=$a+$b;
		echo $sum;
	}
	else
		echo "Invalid data";
}
else
echo "Invalid request";
?>