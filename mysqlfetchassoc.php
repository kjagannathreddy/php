<?php
require_once "dbconnect.php";
$sql_qry="select * from users";
$res=mysqli_query($con,$sql_qry);
while($row=mysqli_fetch_assoc($res))
{
	echo ucfirst($row['name'])." ".$row['email']." ".$row['mobile']."<br/>";
}
?>