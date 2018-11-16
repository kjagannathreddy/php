<?php
$fname="jagan.jpg";
$allowed_exts=array("jpg","png");
$arr=explode(".",$fname);
$ext=end($arr);
if(in_array($ext,$allowed_exts))
echo "File is valid";
else
echo "file is not valid";
?>