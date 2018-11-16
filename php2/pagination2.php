<?php
require_once "dbconnect.php";
$per_page=5;
if(isset($_GET['pn']))
{
$pn=$_GET['pn'];
}
else
$pn=0;
//code for deciding starting index
if($pn==0 || $pn==1)
$si=0;
else
$si=$per_page*($pn-1);

//fetching limited records from db table
$sql_fetch="select name from users limit $si,$per_page";
$resultset=mysqli_query($con,$sql_fetch);
while($row=mysqli_fetch_assoc($resultset))
{
echo $row['name'];
echo "<br/>";
}
//finding total records and displaying page numbers
$sql_qry="select user_id from users";
$res=mysqli_query($con,$sql_qry);
$total=mysqli_num_rows($res);
$pages=ceil($total/$per_page);
for($i=1;$i<=$pages;$i++)
{
?>
<a href="pagination2.php?pn=<?php echo $i;?>" <?php
if($pn==$i)
{
?>style="color:red;" <?php } ?> >
<?php echo $i;?></a>
<?php
}
?>