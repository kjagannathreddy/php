<?php
extract($_POST);
if(isset($search))
{
require_once "dbconnect.php";
$sql_qry="select name from users_tbl where name like '$searchstr%'";
$res=mysql_query($sql_qry);
$count=mysql_num_rows($res);
if($count>0)
{
while($row=mysql_fetch_assoc($res))
{
?>
<p><?php echo $row['name'];?></p>
<?php
}

}
else
{
echo "No records found...!";
}
}

?>
search.html
<form method="post" action="search.php">
<input type="text" name="searchstr" placeholder="Search by name"/><br/><br/>
<input type="submit" name="search" value="Search"/>
</form>
6