<?php
extract($_POST);
if(isset($login))
{
	require_once "dbconnect.php";
	$sql_login="select * from users where email='$email' and password='$password'";
	$res=mysqli_query($con,$sql_login);
	$count=mysqli_num_rows($res);
	if($count==1)
	{
		$row=mysqli_fetch_assoc($res);
		session_start();
		$_SESSION['name']=$row['name'];
		$_SESSION['id']=$row['id'];
		header('location:display.php');
	}
	else
		echo "login failed";
}
else
{
?>
<form action="" method="post" >
	Email:<input type="text" name="email" /><br/>
	Password: <input type="password" name="password" /><br/>
	<input type="submit" name="login" value="Login"/>
</form>
<?php
}
?>