<?php
$str="abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*()_+-=";
echo addcslashes($str,'e')."<br/>";
echo addcslashes($str,'e..o')."<br/>";
echo addcslashes($str,'A..html')."<br>";
echo addcslashes($str,'a.-2.html')."<br>";
echo addcslashes($str,'a.-3.html')."<br>";
echo stripcslashes($str);
?>