<?php
$str="We have a skillful team of web designers and developers. Our cumulative expertise in responsive web design empowers us to tackle the most crucial demands of the present business trends with ease. Need a custom conversation for your unique requiremens? We can employ it for you within no time. Need a website to give you a restart? We can develop it with sheer professionalism. ";
$len=strlen($str);
for($i=3;$i<$len-200;$i++)
{
	echo $str[$i];
}
?>