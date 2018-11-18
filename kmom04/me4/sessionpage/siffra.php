<h3>6.	Skapa en undersida som lagrar en siffra i sessionen och dubblerar dess värde varje gång som sidan laddas.</h3>
<?php

echo "<br>Start siffran är 3.<br>";
// Hämta värdet från session eller använd 0 som default
$siffra = $_SESSION["siffra"] ?? 0;

echo "<br>Hämtad siffra: " . $siffra . " .<br>";
if ($siffra == 0) {
    $siffra = 3;
} else {
    // Beräkna
    $siffra += $siffra;
}

echo "<br>Beräknad siffra: " . $siffra . " .<br>";
// Spara nytt värde
$_SESSION["siffra"] = $siffra;
echo "<br>Siffra sparad.<br>";
?>
