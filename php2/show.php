<table border="1">
<tr><th>Sl.No</th><th>Name</th><th>Email</th>
<th>Mobile</th>
<th>Action</th></tr>
<?php
require_once "dbconnect.php";
$sql_qry="SELECT u.*,c.country_name FROM users u INNER JOIN country_tbl c on u.country_id=c.country_id";
$res=mysqli_query($con,$sql_qry);
$count=mysqli_num_rows($res);

if($count>0)
{
	$i=1;
	while($row=mysqli_fetch_assoc($res))
	{
		?>
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo ucfirst($row['name']);?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['mobile'];?></td>
		<td><?php echo ucfirst($row['country_name']);?></td>
		<td><a href="delete.php">Delete</a> <a href="update.php">Update</a> <a href="changepassword.php">Change Password</a> </td>
		</tr>
		<?php
		$i++;
	}
}
else
{
	?>
	<tr><td colspan="4" style="color:red">No records found in db..!</td></tr>
	<?php
}
?>
</table>