<h3>7.	Skapa en undersida med ett ett POST-formulär som använder en processingsida (undersida) och redirectar till en resultatsida (ny undersida). Du kan göra ett valfritt formulär eller ett “kontakta mig” formulär.</h3>

<link rel="stylesheet" href="css/form.css">

<h1>Skapa ett kontktformulär (POST)</h1>
<p>Det här formuläret kan postas (method POST) och dess resultat sänds till en annan sida som verkställer och sedan vidaresänder
    till sidan som visar ett "Tack".</p>

<form class="form" method="post" action="?page=post-process">
    <fieldset>
        <legend>Vart skall uppgifterna sändas? Fyll i uppgifterna nedan.</legend>
        <p>
            <label for="name">Namn:</label>
            <input id="name" type="text" name="name" value="<?= htmlentities($_GET["name"] ?? null) ?>">
        </p>
        <p>
            <label for="address">Adress:</label>
            <input id="address" type="text" name="address" value="<?= htmlentities($_GET["address"] ?? null) ?>">
        </p>
        <p>
            <label for="city">Ort:</label>
            <input id="city" type="text" name="city" value="<?= htmlentities($_GET["city"] ?? null) ?>">
        </p>
        <p>
            <input type="submit" name="create" value="Create">
            <input type="reset" value="Reset">
            <input type="hidden" name="csrf" value="hemlig-nyckel-för-varje-formulär">
        </p>
    </fieldset>
</form>
