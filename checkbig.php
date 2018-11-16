<?php
$a=16;
$b=7;
$c=9;
if($a>$b && $a>$c)
{
	echo $a ." is big";
	echo "<br/>";
	if($a%2==0)
		echo $a ." is even";
	else 
		echo $a. " is odd";
}
elseif($b>$a && $b>$c)
{
	echo $b ." is big";
	echo "<br/>";
	if($b%2==0)
		echo $b ." is even";
	else 
		echo $b. " is odd";
}
elseif($c>$b && $c>$a)
{
	echo $c ." is big";
	echo "<br/>";
	if($c%2==0)
		echo $c ." is even";
	else 
		echo $c. " is odd";
}
?>