Score card example with ajax
score.html
<span>Score :</span><span id="result"></span>
<script>
setInterval(get_score,1000);
function get_score()
{
if(window.XMLHttpRequest)
var obj=new XMLHttpRequest();
else
var obj=new ActiveXObject('Microsoft.XMLHTTP');
obj.open('GET','score.php',true);//state 1
obj.send();// state 2
obj.onreadystatechange=function(){
if(obj.readyState==4)
{
document.getElementById('result').innerHTML=
obj.responseText;
}
}
}
</script>

score.php
<?php
require_once "dbconnect.php";
$sql_qry="select score from score_tbl";
$res=mysql_query($sql_qry);
$row=mysql_fetch_assoc($res);
echo $row['score'];
?>