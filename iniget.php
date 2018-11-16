<?php
echo ini_get('date.timezone')."<br/>";
ini_set('date.timezone','asia/kolkata');
echo ini_get('date.timezone');
?>