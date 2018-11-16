<?php
class test
{
	private $a=10;
	protected $b=20;
	public $c=30;
	function f1()
	{
		echo "Hi";
	}
}
$obj=new test;
//echo $obj->a;
echo $obj->c;
//echo $obj->b;
$obj->f1();
?>