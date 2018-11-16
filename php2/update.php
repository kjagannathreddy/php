<?php
$uid=$_GET['uid'];
require_once "dbconnect.php";
extract($_POST);
if(isset($update))
{
	$sql_update="update users set name='$name',email='$email',mobile='$mobile' where id=$uid";
	$resp=mysqli_query($con,$sql_update);
	if($resp)
	{
		echo "updated succesfully.";
		header('location:display.php');
	}
		
	else
		echo "update failed";
}
else
{
	$sql_get="select name,email,mobile from users where id=$uid";
	$res=mysqli_query($con,$sql_get);
	$row=mysqli_fetch_assoc($res);

	?>
	<form action="" method="post">
		Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" /><br/>
		Email: <input type="text" name="email" value="<?php echo $row['email']; ?>" /><br/>
		Mobile: <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" /><br/>
		<input type="submit" name="update" value="Update" />
	</form>
<?php
}
?>