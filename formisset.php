<form action="" method="post">
	<input type="text" name="searchstr" placeholder="Search for..."/>
	<input type="submit" name="search" value="Search"/>
</form>
<?php
if(isset($search))
{
	echo "form submitted";
}
else
echo "not submitted";
?>
