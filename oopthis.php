<?php
class test
{
	function f1()
	{
		echo "welcome to ";
	}
	function f2()
	{
		echo $this->f1()."php";
	}
}
$obj=new test;
$obj->f2();
?>