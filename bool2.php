<?php
$a=false;
function chk_bool($x)
{
	if($x===true || $x===false)
		return true;
	else
		return false;
}
echo chk_bool($a);
?>