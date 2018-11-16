<?php
$pur_amt=800;
$dis=0;
if($pur_amt>=10000)
$dis=50;
elseif($pur_amt<10000 && $pur_amt>=5000)
$dis=30;
elseif($pur_amt<5000 && $pur_amt>=2000)
$dis=20;
elseif($pur_amt<2000 && $pur_amt>=1000)
$dis=10;
$dis_amt=($pur_amt*$dis)/100;
$bill_amt=$pur_amt-$dis_amt;
echo "Your total amount is ".$bill_amt;
?>