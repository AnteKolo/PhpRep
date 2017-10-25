<?php
$niz = "a     .o misevima i ljudima \n";
echo $niz;
echo "<br />";
$niz = trim($niz);
echo $niz;
echo "<br />";

$niz2 = "o misevima i ljudima";
$malaslova = strtolower($niz2);
echo $malaslova;
echo "<br />";
$velikaslova = strtoupper($malaslova);
echo $velikaslova;
echo "<br />";
$dulj = strlen($velikaslova);
echo $dulj;
?>