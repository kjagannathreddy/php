<?php
$n=5;
for($i=1;$i<=$n;$i++)
{
	if($i%2==0)
		echo ($i*$i);
	else
		echo ($i*$i*$i);

	echo "<br/>";
}
?>