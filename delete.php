<?php
if(isset($_GET['uid']))
{
	$uid=$_GET['uid'];
	if(is_numeric($uid))
	{
		require_once "dbconnect.php";
		$sql_del="delete from users where id=$uid";
		$resp=mysqli_query($con,$sql_del);
		if($resp)
			echo "deleted";
		else
			echo "not deleted";
	}
}
else
echo "Data is missing";
?>