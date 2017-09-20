<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
echo "<h1>2 broja</h1>";
$a = 5;
$b = 10;
if($a==$b){echo "a jednak b";}
else if($a>$b){echo "a veci od b";}
else{echo "a manji od b";}

echo "<p></p>";

switch ($a) {
    case ($b):
        echo "a jednak b";
        break;
    case ($a>$b):
        echo "a veci od b";
        break;
    case ($a<$b):
        echo "a manji od b";
        break;
}
?>
</body>
</html>