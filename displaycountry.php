<select>
	<option>Select country</option>
	<?php
	require_once "dbconnect.php";
$sql_qry="select * from country_tbl";
$res=mysqli_query($con,$sql_qry);
$i=1;
//$count=mysqli_num_rows($res);
while($row=mysqli_fetch_assoc($res))
{
	?>
	<option value="<?php echo $i; ?>"><?php echo ucfirst($row['country_name']); ?></option>
		<?php
		$i++;
}

	?>
</select>