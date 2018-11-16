<?php
$str="Jagannath";
$enstr=convert_uuencode($str);
echo $enstr."<br/>";
echo convert_uudecode($enstr);
?>