<?php
$xyz=10;
class welcome
{
	function message()
	{
		echo "Welcome to OOP's";
		global $xyz;
		echo $xyz;
	}
}
$obj=new welcome;
$obj->message();
?>