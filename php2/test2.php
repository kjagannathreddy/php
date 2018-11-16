<?php
$name="";
$mobile="";
$nmerr="";
$mberr="";

extract($_POST);
if(isset($submit))
{
	$err=true;
	if(empty($name))
	{
		$err=false;
		$nmerr="Enter a name";
	}
	if(empty($mobile))
	{
		$err=false;
		$mberr="Enter mobile number";
	}
	if(!empty($name))
	{
			$nexp="/^[a-zA-Z]+$/";		
			if(preg_match($nexp,$name))
				{
					$nmerr="";
					$name=$name;
				}
			else
			{
				$err=false;
				$nmerr="Invalid name";
				$name="";
			}
	}
	if(!empty($mobile))
	{
			$mbexp="/^[0-9]{10}$/";
			if(preg_match($mbexp,$mobile))
				{
					$mberr="";
					$mobile=$mobile;
				}
			else
			{
				$err=false;
				$mberr="invalid number";
				$mobile="";
			}
	}
	if($err)
	{
		echo "Registration is success";
		//$_POST=array();
		unset($_POST);
	}
}
?>
<form action="test2.php" method="post">
	<input type="text" name="name" value="<?php echo $name; ?>"/>
	<span id="nmerr"><?php echo $nmerr; ?></span><br/>
	<input type="text" name="mobile" value="<?php echo $mobile; ?>"/>
	<span id="mberr"><?php echo $mberr; ?></span>
	<input type="submit" value="submit" name="submit"/>
</form>