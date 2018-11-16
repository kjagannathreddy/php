<?php
$str="welcome to php and mysql development";
$len=strlen($str);
$count=0;
for($i=0;$i<$len;$i++)
{
	if($str[$i]=='e')
		$count++;
}
echo $count;
?>