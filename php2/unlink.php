<?php
require_once "dbconnect.php";
$get_img="select profile_pic from users where user_id=26";
$res=mysqli_query($con,$get_img);
$row=mysqli_fetch_assoc($res);

if(unlink("uploads/".$row['profile_pic']))
{
	$del="delete from users where user_id=26";
	$resp=mysqli_query($con,$del);
	if($resp)
	{
		echo "Deleted successfully";
	}
}
?>