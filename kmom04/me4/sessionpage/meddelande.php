<h3>8.	Gör ytterligare undersida med ett POST formulär där du har ett formulärfält (textarea)
    där användaren kan skriva ett eget meddelande. Detta meddelande skall du hantera i processingsidan,
spara i sessionen, och slutligen visa i resultatsidan (tänk read once flash message).</h3>

<?php
// echo "<br>processing.php";
?>

<link rel="stylesheet" href="css/form.css">
<p>I det här formuläret kan du skriva ett meddelande (method POST),
    som sparas i sessionen och resultatet visas i resultatsidan.</p>

<form class="form" method="post" action="?page=post-process-medd">
<fieldset>
<legend>Skriv ditt meddelande i rutan nedan. Tryck sedan på "Skicka".</legend>
    <p>
        <label for="texten">Text:</label>
        <input id="texten" type="text" name="texten" value="<?= htmlentities($_GET["texten"] ?? null) ?>">
    </p>
    <p>
        <input type="submit" name="create" value="Skicka">
        <input type="reset" value="Reset">
        <input type="hidden" name="csrf" value="hemlig-nyckel-för-varje-formulär">
    </p>
</fieldset>
</form>
