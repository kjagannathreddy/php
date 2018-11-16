<?php
$str="welcome to mysql";
$arr=explode(" ",$str);
$count=count($arr);
for($i=$count-1;$i>=0;$i--)
{
	echo $arr[$i];
}
?>