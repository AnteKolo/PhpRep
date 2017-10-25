<?php
echo "Danas je  25.10.2017. a od 1.1.2000. je proslo ";
$datum1 = strtotime('Jan 1, 2000 00:00:00 GMT');
$datum2 = strtotime('Oct 25 2017 12:12:12 GMT');
$sekunde = $datum2 - $datum1;
$sati = $sekunde / 3600;
echo $sati;
echo " sati.";
?>