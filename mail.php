<?php
$to="melittakyleigh@gmail.com";
$subject="Mail testing";
$message="Hi cutie pie! how are you...";
$headers="From: jagannath.bond007@gmail.com";
$resp=mail($to,$subject,$message,$headers);
if($resp)
echo "Mail sent successfully";
else
echo "Mail sending failed";
?>