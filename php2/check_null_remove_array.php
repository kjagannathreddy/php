<?php
foreach($package_item as $key => $value)
{
    if($value===null)
    {
        $package_item[$key]="";
    }
}
print_r($package_item);
?>
