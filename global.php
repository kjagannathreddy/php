<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;
echo $y;
function myTest() {
    global $x, $y;
    echo $y;
    echo $x;
    $y = $x + $y;
    echo $y;
}
echo $y;
myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>