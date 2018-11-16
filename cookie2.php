<?php
session_start();
echo session_id()."<br/>";
echo $_COOKIE['PHPSESSID']."<br/>";
echo $_COOKIE['name'];
?>