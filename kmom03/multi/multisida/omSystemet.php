<h2>Antal "items" i $_SERVER</h2>
<pre>
<?php
/*
Skapa en ny undersida som skriver ut detaljer om innehållet i arrayen $_SERVER.
1) Sidan skall skriva ut hur många “items” som arrayen innehåller.
   Till exempel “There are XX entries in the array for $_SERVER.”.

2) Skriv även ut nyckeln och innehållet för det första och det sista värdet i arrayen.

Var tydlig så man ser vilket som är det första och vilket som är det sista värdet.
*/
$antal = count($_SERVER);
$firstV= reset($_SERVER);   // första värdet
$lastV= end($_SERVER);      // sista värdet

// $a =array(”en”= >”röd”,”b”= >”grön”,”c”= >”blå”);
$firstK = array_search($firstV, $_SERVER);
$lastK = array_search($lastV, $_SERVER);

echo "There are " . $antal . " items. <br>";
echo "Den första nyckeln är " . $firstK . ", värdet är " . $firstV . ". <br>";
echo "Den sista nyckeln är " . $lastK . ", värdet är " . $lastV . ". <br>";

echo "<br>Det är dessa itms "
?>
</pre>
<pre>
<?= htmlentities(print_r($_SERVER, true)); ?>
</pre>
