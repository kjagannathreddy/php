<?php
$str="Jagannath";
$str2=count_chars($str,0);
print_r($str2);
echo "<br/>";
$str3=count_chars($str,1);
print_r($str3);
echo "<br/>";
$str4=count_chars($str,2);
print_r($str4);
echo "<br/>";
echo count_chars($str,3)."<br/>";
echo count_chars($str,4)."<br/>";
?>