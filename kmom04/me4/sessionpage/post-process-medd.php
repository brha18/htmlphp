<h4>post-process-medd</h4>
<?php

$texten = $_POST["texten"] ?? "Fusk!";
echo "Detta är innehållet i formuläret. <br>" . $texten . "<br>";
echo "<br>Inkommande i SESSION<br>";
var_dump($_POST);
/*
Spara i sessionen     $_SESSION["texten"] = $texten;
Läsa från sessionen   $adress=$_POST["address"];
*/

$_SESSION["flashmessage"] = $texten;
// var_dump($_POST["$texten"]);
$url = "./sessionpage.php?page=post-resultat-medd";
// exit;
header("Location: $url");
?>
