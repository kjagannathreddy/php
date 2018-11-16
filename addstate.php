<?php
extract($_POST);
if(isset($add))
{
	if(!empty($state))
	{
		$conn=mysqli_connect("localhost", "root", "");
		if($conn)
		{
			$dbsel=mysqli_select_db($conn,'nit');
			if($dbsel)
			{
				require_once "validatestr.php";
				$sqlchk="select state_name from state_tbl where state_name='".format_str($state)."'";
				$result=mysqli_query($conn,$sqlchk);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					echo "state name already exists";
				}
				else
				{
					$sqlqry="insert into state_tbl(state_name) values('".format_str($state)."')";
					$resp=mysqli_query($conn,$sqlqry);
					if($resp)
						echo "state name added";
					else
						echo "state name add failed";
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