<?php
class test
{
	public $a=10;
	function f1()
	{
		$b=20;
		$sum=$this->a+$b;
		echo $sum;
	}
}
$obj=new test;
$obj->f1();
?>