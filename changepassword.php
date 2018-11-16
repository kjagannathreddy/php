<?php
session_start();
$uid=$_SESSION['id'];
if(!empty($uid))
	{

require_once "dbconnect.php";

extract($_POST);
if(isset($change))
{
	if(!empty($old) && !empty($new) && !empty($confirm))
	{
		$sql_get="select password from users where id=$uid";
		$result=mysqli_query($con,$sql_get);
		$row=mysqli_fetch_assoc($result);
		if($new==$confirm && $old==$row['password'])
		{
			$sql_change="update users set password=$new where id=$uid";
			$change=mysqli_query($con,$sql_change);
			if($change)
				echo "password changed success";
			else
				echo "password not changed";
		}
		else
			echo "passwords do not match";
		
	}
	else
		echo "Password field is empty!";
}
else
{
?>
<form action="" method="post">
	Old Password: <input type="password" name="old" /><br/>
	New Password: <input type="password" name="new" /><br/>
	Confirm Password: <input type="password" name="confirm" /><br/>
	<input type="submit" name="change" value="Change Password"/>
</form>
<?php
}
}
else
	header('location:login.php');
?>