<?php
$datum = date("d/m/Y h:i:s") . "<br>";
echo $datum;
echo "<br>";
echo substr($datum, 0, 11);
echo "<br>";
echo substr($datum, 11, 8);
echo "<br>";
echo substr($datum, 0, 2);
echo "<br>";
echo substr($datum, 3, 2);
echo "<br>";
echo substr($datum, 6, 4);
echo "<br>";
echo substr($datum, 11, 2);
echo "<br>";
echo substr($datum, 14, 2);
echo "<br>";
echo substr($datum, 17, 2);
echo "<br>";
?>