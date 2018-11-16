<?php
$a=2.456;
if(is_numeric($a) && !is_float($a))
	echo $a. " is an integer value";
else
	echo $a. " is not an integer value";
?>