<h4>post-process</h4>
<?php

/* var_dump($_POST); echo "<br>";
echo "Detta är innehållet i formuläret. <br>";
print_r($_POST); echo "<br>";

$namn=$_POST["name"];
$adress=$_POST["address"];
$ort=$_POST["city"];
echo "<br>namn: ". $namn . ", adress: " . $adress . ", ort: " . $ort . "<br>";
*/

if ($_POST["create"] ?? false) {
    // echo "<br>create<br>";
    $url = "./sessionpage.php?page=post-resultat";
    //exit;
    header("Location: $url");
}
?>
