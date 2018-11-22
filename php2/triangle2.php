<?php  
for($i=0;$i<=5;$i++)
    {  
        for($k=5;$k>=$i;$k--)
        {  
        echo " &nbsp;";  
        }  
        for($j=1;$j<=$i;$j++)
        {  
        echo "&nbsp;*&nbsp;";  
        }  
        echo "<br>";  
    }  
    for($i=5;$i>=1;$i--){  
        for($k=5;$k>=$i;$k--){  
        echo " &nbsp;";  
        }  
        for($j=1;$j<=$i;$j++){  
        echo "&nbsp;*&nbsp;";  
        }  
    echo "<br>";  
    }  
?>  