<!DOCTYPE html>
<html>
<body>

<?php
$str= bin2hex("Jagannath")."<br/>";
echo $str."<br/>";
echo bin2hex("j")."<br/>";
echo bin2hex("a")."<br/>";
echo bin2hex("g")."<br/>";
echo bin2hex("a")."<br/>";
echo bin2hex("n")."<br/>";
echo bin2hex("n")."<br/>";
echo bin2hex("a")."<br/>";
echo bin2hex("t")."<br/>";
echo bin2hex("h")."<br/>";
echo pack("H*",bin2hex("Jagannath"));
?>

</body>
</html>