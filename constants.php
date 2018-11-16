<?php
define('IMG_PATH','images');
echo IMG_PATH."<br/>";
echo constant('IMG_PATH');
echo __LINE__."<br/>";
function myfunction()
{
	echo __FUNCTION__."<br/>";
}
myfunction();
class myclass
{
	public function f1()
	{
		echo __CLASS__."<br/>";
		echo __METHOD__."<br/>";
	}
}
$obj=new myclass;
$obj->f1();
echo __DIR__."<br/>";
echo __FILE__."<br/>";
?>