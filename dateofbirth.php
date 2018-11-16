<?php
$dob="27-02-1992";
$d1=strtotime($dob);
$date=date('d-m-Y');
$d2=strtotime($date);
$diff=$d2-$d1;
//echo date('Y-m-d',$diff);