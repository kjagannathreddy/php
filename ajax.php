AJAX CODE FOR 9 AM & 10:30 am
country and states example

display.php
<select id="country" onchange="ajax_states();">
<option value="">- Select country -</option>
<?php
require_once "dbconnect.php";
$sql_qry="select * from country_tbl";
$res=mysql_query($sql_qry);
while($row=mysql_fetch_assoc($res))
{
?>
<option value="<?php echo $row['country_id'];?>"><?php echo $row['country_name'];?></option>
<?php
}
?>
</select>
<span id="override">
<select>
<option value="">- Select State -</option>
</select>
</span>

<script>
function ajax_states()
{
var cid=document.getElementById('country').value;
if(window.XMLHttpRequest)
var obj=new XMLHttpRequest();
else
var obj=new ActiveXObject('Microsoft.XMLHTTP');
obj.open('GET','getstates.php?cid='+cid,true);
obj.send();
obj.onreadystatechange=function(){
if(obj.readyState==4)
{
document.getElementById('override').innerHTML=obj.responseText; 
}
}

}
</script>

getstates.php
<select name="state" id="state">
<option value="">- Select State -</option>
<?php
$cid=$_GET['cid'];
require_once "dbconnect.php";
$sql_qry="select * from states_tbl where country_id=$cid";
$res=mysql_query($sql_qry);
while($row=mysql_fetch_assoc($res))
{
?>
<option value="<?php echo $row['state_id'];?>"><?php echo $row['state_name'];?></option>
<?php
}
?>
</select>

Deleting records

display_users.php
<?php
if(empty($_COOKIE['user_id']))
{
header('location:login.php');
}
?>
<p>Welcome to <?php echo ucfirst($_COOKIE['name']);?></p>
<a href="logout.php">Logout</a>
<div id="override">
<table border="1">
<tr><th>Sl.No</th><th>Name</th><th>Email</th>
<th>Mobile</th>
<th>Action</th>
</tr>
<?php
require_once "dbconnect.php";
$sql_qry="select user_id,name,email,mobile from users_tbl";
$res=mysql_query($sql_qry);
$count=mysql_num_rows($res);
if($count>0)
{
$i=1;
while($row=mysql_fetch_assoc($res))
{
?>
<tr><td><?php echo $i;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><a href="#" onclick="callajax_delete(<?php echo $row['user_id'];?>);">Delete</a>
<a href="update.php?uid=<?php echo $row['user_id'];?>">Update</a>
</td>
</tr>
<?php
$i++; 
}
}
else
{
?>
<tr><td colspan="5" style="color:red">No records found in db..!</td></tr>
<?php
}
?>
</table>
</div>
<script>
function callajax_delete(uid)
{
var con=window.confirm('Are you sure to delete?');
if(con)
{
if(window.XMLHttpRequest)
var obj=new XMLHttpRequest();
else
var obj=new ActiveXObject('Microsoft.XMLHTTP');
obj.open('GET','delete.php?uid='+uid,true);
obj.send();
obj.onreadystatechange=function(){
if(obj.readyState==4)
{

document.getElementById('override').innerHTML=obj.responseText; 
}
}
}
}
</script>

delete.php

<?php
$user_id=$_GET['uid'];
require_once "dbconnect.php";
$sql_del="delete from users_tbl where 
user_id=$user_id";
$resp=mysql_query($sql_del);
if($resp)
{
?>
<table border="1">
<tr><th>Sl.No</th><th>Name</th><th>Email</th>
<th>Mobile</th>
<th>Action</th>
</tr>
<?php
$sql_qry="select user_id,name,email,mobile from users_tbl";
$res=mysql_query($sql_qry);
$count=mysql_num_rows($res);
if($count>0)
{
$i=1;
while($row=mysql_fetch_assoc($res))
{
?>
<tr><td><?php echo $i;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><a href="#" onclick="callajax_delete(<?php echo $row['user_id'];?>);">Delete</a>
<a href="update.php?uid=<?php echo $row['user_id'];?>">Update</a>
</td>
</tr>
<?php
$i++; 
}
}
else
{
?>
<tr><td colspan="5" style="color:red">No records found in db..!</td></tr>
<?php
}
?>
</table>
<?php 
}
?>