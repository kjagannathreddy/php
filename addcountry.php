<?php
extract($_POST);
if(isset($add))
{
	if(!empty($country))
	{
		$conn=mysqli_connect("localhost", "root", "");
		if($conn)
		{
			$dbsel=mysqli_select_db($conn,'nit');
			if($dbsel)
			{
				require_once "validatestr.php";
				$sqlchk="select country_name from country_tbl where country_name='".format_str($country)."'";
				$result=mysqli_query($conn,$sqlchk);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					echo "Country name already exists";
				}
				else
				{
					$sqlqry="insert into country_tbl(country_name) values('".format_str($country)."')";
					$resp=mysqli_query($conn,$sqlqry);
					if($resp)
						echo "Country name added";
					else
						echo "country name add failed";
				}
			}
			else
				echo "Database does not exists";
		}
		else
			echo "Database connection error";
	}
	else
		echo "empty fields";
}
else
echo "invalid request";
?>