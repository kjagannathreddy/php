<?php
$pur_amt=100;
$dis=0;
$gen="female";
if($pur_amt>=1000)
{
	if($gen=="male")
		$dis=10;
	else
		$dis=20;
}
$dis_amt=($pur_amt*$dis)/100;
$bill_amt=$pur_amt-$dis_amt;
echo "Your total amount is ".$bill_amt;
?>