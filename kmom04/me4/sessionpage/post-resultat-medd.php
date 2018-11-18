<h4>Post-resultat-medd</h4>
<?php
// Hämta meddelandet
$texten = $_SESSION["flashmessage"] ?? null;
// nollställ "Read once flash message"
$_SESSION["flashmessage"] = null;

/*
Spara i sessionen     $_SESSION["texten"] = $texten;
Läsa från sessionen   $adress=$_POST["address"];
*/
?>

<!-- Om det finns ngt meddelandet skriv ut det så att användaren ser det -->
<?php if ($texten) : ?>
    <p>Vi har fått ditt meddelande som lyder: <br>
    <div style="background-color: grey">
    <p><?= $texten ?>
</div>
<?php endif; ?>
