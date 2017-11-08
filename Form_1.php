<html>
<head>
    <title>Adresar</title>
    <meta charset="utf-8" />
</head>
<body>
<h2>Spremljena adresa</h2>
<?php
    $ime = $_GET["ime"];
    $adresa = $_GET["adresa"];
    $grad = $_GET["grad"];

    if (isset($_GET["spol"])){
        if ($_GET["spol"] == "M")
            $spol = "muski";
        else
            $spol = "zenski";
    }

    else
        $spol = "";

    if (isset($_GET["prijatelj"]))
        $prijatelj = "da";
    else
        $prijatelj = "ne";

    echo "Ime: $ime <br/>";
    echo "Adresa: $adresa <br/>";
    echo "Grad: $grad <br/>";
    echo "Spol: $spol <br/>";
    echo "Prijatelj: $prijatelj <br/>";

?>
</body>
</html>