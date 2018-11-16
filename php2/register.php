<?php
extract($_POST);
if(isset($register))
{
	if(!empty($name) && !empty($email) && !empty($mobile) && !empty($password) && !empty($day) && !empty($month) && !empty($year))
	{
		$conn=mysqli_connect("localhost", "root", "");
		if($conn)
		{
			$sel=mysqli_select_db($conn,'nit');
			if($sel)
			{
				require_once "validatestr.php";
				$sql_chk="select email from users where email='".format_str($email)."'";
				$resultset=mysqli_query($conn,$sql_chk);
				$count=mysqli_num_rows($resultset);
				if($count>0)
				{
					echo "Email already exists";
				}
				else
				{
					$dob=$day."-".$month."-".$year;
					$sqlqry="insert into users(name,email,mobile,password,dob) values('".format_str($name)."','".format_str($email)."','".format_str($mobile)."','".format_str($password)."','".$dob."')";
					$resp=mysqli_query($conn,$sqlqry);
					if($resp)
						echo "Registration successful";
					else
						echo "Registration Failed";
				}
				
			}
			else
				echo "Database does not exists";
		}
		else
			echo "Error establishing connection";
	}
	else
		echo "Data is missing";
}
else
{
	?>
	<!doctype html>
<html>
<head>
	<title>Register account</title>
	</head>

<body>
	<form action="register.php" method="post" />
Enter name: <input type="text" name="name" /><br/>
Enter email: <input type="email" name="email" /><br/>
Enter mobile: <input type="text" name="mobile" /><br/>
Enter date of birth: 
<select name="day">
	<option>Select day</option>
	<?php
	$i=1;
	while($i<=31)
	{
		?>
		<option value="<?php echo $i; ?>"><?php	echo $i; ?></option>
		<?php
		$i++;
	}
	?>
</select>
<select name="month">
<option>Select month</option>
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="year">
<option>Select year</option>
<?php
$i=1919;
while($i<=2018)
{
	?>
	<option value="<?php echo $i; ?>"><?php	echo $i; ?></option>
<?php
$i++;
}
?>
</select><br/>
Enter password: <input type="password" name="password" /><br/>
<input type="submit" name="register" value="Register" />
</form>
<body>
	</html>
	<?php
}
?>
