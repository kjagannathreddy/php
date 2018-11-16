<?php
$alp="abcdefghijklmnopqrstuvwxyz";
$num="0123456789";
$spe="~!@#$%^&*()_+-=,./<>?;'\|[]{}`";
$cap=$alp.$num.$spe;
$cap=str_shuffle($cap);
echo substr($cap,1,6);
?>