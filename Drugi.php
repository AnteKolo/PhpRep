<?php
$vri = "1234567891011121314151617181920212223242";
echo (strlen($vri));
echo "<br \>";
function znak($vri){
    if (strlen($vri)<10){
        echo substr($vri, 0, 5);
    }
    else{
        echo substr($vri, 0, 20);
    }
}
znak($vri);
?>