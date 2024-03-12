<?php
include 'funkcijos.php';

if (!isset($_POST["nuo"])) {
    echo "Neįrašytas kintamasis";
    header('location:funkcija.html');
    exit;
}

$nuo = $_POST["nuo"];
$iki = $_POST["iki"];

$rez = intervalas($nuo, $iki);

echo "Antra kodo dalis <br>";
echo "<b>Didžiausias iteracijų skaičius:</b> " . $rez['max'] . ", kurį pasiekė skaičius " . $rez['maxs'] . "<br>";
echo "<b>Mažiausias iteracijų skaičius:</b> " . $rez['min'] . ", kurį pasiekė skaičius " . $rez['mins'] . "<br>";
?>
