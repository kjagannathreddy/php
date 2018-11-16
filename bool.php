<?php
$a=7;
$a=(bool)$a;
echo $a;
if(is_bool($a))
	echo "var is a boolean value";
else
	echo "var is not a boolean value";
?>