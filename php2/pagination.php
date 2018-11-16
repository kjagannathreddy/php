<?php
if(!empty($_GET['page']))
	{
		$pid=$_GET['page'];
		?>
		<table border="1">
		<tr><th>Sl.No</th><th>Name</th><th>Email</th>
		<th>Mobile</th>
		<th>Action</th></tr>
		<?php
		$p_res=6;
		require_once "dbconnect.php";
		$sql_qry="select * from users";
		$res=mysqli_query($con,$sql_qry);
		$count=mysqli_num_rows($res);
		$pg_num=$count/$p_res;
		$limit_qry="select * from users limit ".$p_res*($pid-1).",$p_res";
		$new_res=mysqli_query($con,$limit_qry);
		$cnt=mysqli_num_rows($new_res);
		if($cnt>0)
		{
			$i=1;
			while($row=mysqli_fetch_assoc($new_res))
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
	{
		?>
		<table border="1">
		<tr><th>Sl.No</th><th>Name</th><th>Email</th>
		<th>Mobile</th>
		<th>Action</th></tr>
		<?php
		$p_res=6;
		require_once "dbconnect.php";
		$sql_qry="select * from users limit 0,$p_res";
		$res=mysqli_query($con,$sql_qry);
		$count=mysqli_num_rows($res);
		$pg_num=$count/$p_res;
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
for($i=1;$i<=$pg_num;$i++)
{
	?>
	<a href="pagination.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php
}
?>
