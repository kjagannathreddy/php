<?php
extract($_POST);
if(isset($lrc))
{

echo strip_tags($_POST['lyrics']);
}
?>
<form action="" method="post">
	<textarea name="lyrics"></textarea>
	<input type="submit" name="lrc" value="change"/>
</form>