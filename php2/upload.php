<?php
extract($_POST);
if(isset($_FILES['image']))
{
	$error=0;
	$f_tmp=$_FILES['image']['tmp_name'];
	$f_name=$_FILES['image']['name'];
	$f_size=$_FILES['image']['size'];
	//code for checking extension
	$allowed_exts=array('jpg','jpeg','png','gif');

	$ext=strtolower(end(explode(".",$f_name)));	
	if(!in_array($ext,$allowed_exts))
	{
		echo "Invalid file";
		$error=1;
	}
	//checkin for size
	if($f_size>2097152)
	{
		echo "File size should be less than 2MB";
		$error=1;
	}
	if($error==0)
	{
		if(move_uploaded_file($f_tmp, "uploads/".$f_name))
		{
			
			require_once "dbconnect.php";
			$sql_ins="insert into users(name,profile_pic) values('$name','$f_name')";
			mysqli_query($con,$sql_ins);
			echo "File uploaded successfully";
		}
	}
}
?>
<form action="" method="post" enctype="multipart/form-data">
	Name: <input type="text" name="name"/>
	<input type="file" name="image"/>
	<input type="submit" name="upload" value="upload"/>
</form>