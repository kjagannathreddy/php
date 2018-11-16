<?php
$arr=array(array(2,4,5),array(6,8,3),array(9,7,5));
foreach($arr as $row)
{
	foreach($row as $col)
	{
		echo $col." ";
	}
	echo "<br/>";
}
?>