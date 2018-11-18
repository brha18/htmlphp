<h2>Längder på värden i $_SERVER</h2>
<pre>
<?php
/*
Skapa en ny undersida som innehåller följande.
1) Skriv en foreach() loop som räknar ut längden på varje värde i arrayen $_SERVER.
2) För varje nyckel i arrayen, skall du ta värdet och räkna ut längden av det med strlen().
   Skriv ut nyckeln (key), följt av längden på dess värde.
3) Avsluta med att skriva ut själva innehållet i den key/value som “är längst”.
*/

$jmf = 0;
foreach ($_SERVER as $key => $value) {
    $length = strlen($value);
    echo "Längden på värdet för nyckeln " . $key . " är " . $length . ".<br>";
    if ($length > $jmf) {
        $jmf = $length;
        $content = $value;
        $reqKey = $key;
    }
}
echo "<br>Den längsta nyckeln är <br>" . $reqKey . ",<br>värdet är <br>" . $content . ". <br>";
?>
</pre>
