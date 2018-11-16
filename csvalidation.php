Client side and server side validation Today code for 9 am and 10:30 am batch

register.php
<?php
extract($_POST);
$name_err="";
$pincode_err="";
if(isset($register))
{
/*server side validations*/

$err=true;
if(empty($name))
{
$err=false;
$name_err="Name is required";
}
if(empty($pincode))
{
$err=false;
$pincode_err="Pincode is required";
}
if($err)
{
//db logic here
}
/*end*/
}
?>

<form method="post" action="" onsubmit="return validateform();">
Name : <input type="text" name="name" id="name"/>
<span id="nerr" style="color:red;"><?php
echo $name_err;
?></span>
<br/><br/>
Pincode : <input type="text" name="pincode" id="pincode"/>
<span id="perr" style="color:red;">
<?php
echo $pincode_err;
?>
</span>
<br/><br/>
<input type="submit" name="register" value="Register"/>
</form>

<script>
function validateform1()
{
var name=document.getElementById('name').value;
var pincode=document.getElementById('pincode').value;
var err=true;
if(name=="")
{
err=false;
document.getElementById('nerr').innerHTML="Enter name";
document.getElementById('name').style.border="1px solid red";
}
else
{
document.getElementById('nerr').innerHTML="";
document.getElementById('name').style.border="";
}
if(name!="")
{
var np=/^[a-zA-Z]+$/;
if(!np.test(name))
{
err=false;
document.getElementById('nerr').innerHTML="Invalid name"; 
}
else
{
document.getElementById('nerr').innerHTML="";
}
}
/*pincode validation*/
if(pincode=="")
{
err=false;
document.getElementById('perr').innerHTML="Enter pincode";
document.getElementById('pincode').style.border="1px solid red";
}
else
{
document.getElementById('perr').innerHTML="";
}
/*end*/
if(pincode!="")
{
var pp=/^[0-9]{6}$/;
if(!pp.test(pincode))
{
err=false;
document.getElementById('perr').innerHTML="Invalid pincode";
}
else
{
document.getElementById('perr').innerHTML="";
}
}
return err;
}
</script>

