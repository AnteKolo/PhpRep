<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
echo "<h1>2 broja</h1>";
$a = 5;
$b = 10;
if($b<$a){
    if ($a==2*$b){echo "a je duplo veci od b";}
    else{echo "a je veci od b";}
}
else if($a<$b){
    if ($b==(2*$a)){echo "b je duplo veci od a";}
    else{echo "b je veci od a";}
}
else{echo "a jednak b";}

echo "<p></p>";

switch ($a) {
    case ($b):
        echo "a jednak b";
        break;
    case ($a>$b):
        case($a==2*$b):
            echo "a je duplo veci od b";
            break;
        echo "a veci od b";
        break;
    case ($a<$b):
        case($b==2*$a):
            echo "b je duplo veci od a";
            break;
        echo "b veci od a";
        break;
}

?>
</body>
</html>