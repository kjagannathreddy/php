<?php
session_start();
$uid=$_SESSION['id'];
if(!empty($uid))
	{
		?>
		<table border="1">
		<tr><th>Sl.No</th><th>Name</th><th>Email</th>
		<th>Mobile</th>
		<th>Action</th></tr>
		<?php
		require_once "dbconnect.php";
		$sql_qry="select * from users where id=$uid";
		$res=mysqli_query($con,$sql_qry);
		$count=mysqli_num_rows($res);
		//var_dump($res);
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
<?php
}
else
header('location:login.php');
?>