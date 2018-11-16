<?php
$pwd="jagan123";
$epwd=base64_encode($pwd);
echo $epwd."<br/>";
echo base64_decode($epwd);
?>