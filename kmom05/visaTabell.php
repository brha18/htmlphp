<?php
// Get incoming from search form
// Först kollar vi om formuläret är postat. 
// Eftersom skriptet beteer sig olika beroende på om formuläret är postat eller ej, så gör vi det först.
$search = isset($_GET['search'])
    ? $_GET['search']
    : null;
    
    
// skriva ut webbsidan inklusive formuläret. 
// Obs formulärnamnet "name=search!
?>
<!doctype html>
<meta charset=utf8>
<form>
    <input type="search" name="search" value="<?=$search?>" placeholder="Enter substring to search for, use % as wildcard.">
    <input type="submit" value="Search">
</form>


<?php
// Break script if empty $search
// kollar jag om formuläret var postat, 
// annars skriver jag bara ut en uppmaning om att skriva in en söksträng.
if (is_null($search)) {
    exit ("<p>Nothing to display, please enter a searchstring.");
}

// kopplar jag upp mig mot databasen och förbereder SQL-frågan.
// Create a DSN for the database using its filename
// Skapa en DSN, Data Source Name, för databasen.
$fileName = __DIR__ . "/jetty//db/boatclub.sqlite";
$dsn = "sqlite:$fileName";

// Skapa ett nytt databasobjekt och peka det mot filen.
// Open the database file and catch the exception if it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}
// De två frågetecknen i SQL-frågan kallas för place holders och skall matchas mot argument.
// Det sker via en array av parametrar som skickas med som ett argument när frågan exekveras.
// Prepare the SQL statement
$sql = "SELECT * FROM jetty WHERE boatType LIKE ? OR boatEngine LIKE ?";
$stmt = $db->prepare($sql);
echo "<p>Preparing the SQL-statement:<br><code>$sql</code><p>";

// Execute the SQL statement using parameters to replace the ?
$params = [$search, $search];
$stmt->execute($params);
echo "<p>Executing using parameters:<br><pre>" . htmlentities(print_r($params, true)) . "</pre>";

// Hämta resultatet från SQL-frågan, fetchAll, svaret kommer i en array.
// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";
// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>{$row['jettyPosition']}</td>";
    $rows .= "<td>{$row['boatType']}</td>";
    $rows .= "<td>{$row['boatEngine']}</td>";
    $rows .= "<td>{$row['boatLength']}</td>";
    $rows .= "<td>{$row['boatWidth']}</td>";
    $rows .= "<td>{$row['ownerName']}</td>";
    $rows .= "</tr>\n";
}

// Skriv ut resultatet.
// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
<table>
<tr>
    <th>position</th>
    <th>boatType</th>
    <th>boatEngine</th>
    <th>boatLength</th>
    <th>boatWidth</th>
    <th>ownerName</th>
</tr>
$rows
</table>
<p><a href="?">Clear search results</a>.</p>
EOD;


// Check if script was accessed using specific position
// as in update?position=2
$position = isset($_GET['position'])
    ? $_GET['position']
    : null;


if ($position) {
    // Get details on the boat using specified position
    $sql = "SELECT * FROM jetty WHERE position = ?";
    $stmt = $db->prepare($sql);
    $params = [$position];
    $stmt->execute($params);

    // Först hanteringen i PHP som läser från databasen.
    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_BOTH);
    
    if (empty($res)) {
        die("No such position.");
    }
    
    // Move content of array to individual variables, for ease of use.
    list($position, $boatType, $boatEngine, $boatLength, $boatWidth, $ownerName) = $res[0];
}    

// Därefter så används variablerna för att fylla i formulärets fält.
// // OBS formulärnamnet!!!!
?>
<form method="post" action="visa1_Post.php">  
    <fieldset>
        <legend>Nytt formulär</legend>
        <p><label>jettyPosition<br><input type="number" name="jettyPosition" value="<?=$position?>" readonly></label></p>
        <p><label>boatType<br><input type="text" name="boatType" value="<?=$boatType?>"></label></p>
        <p><label>boatEngine<br><input type="text" name="boatEngine" value="<?=$boatEngine?>"></label></p>
        <p><label>boatLength<br><input type="number" name="boatLength" value="<?=$boatLength?>"></label></p>
        <p><label>boatWidth<br><input type="number" name="boatWidth" value="<?=$boatWidth?>"></label></p>
        <p><label>ownerName<br><input type="text" name="ownerName" value="<?=$ownerName?>"></label></p>
        <p><input type="submit" name="save" value="Save"></p>
    </fieldset>
</form>

<?php
$position = isset($_GET['position'])
    ? $_GET['position']
    : null;

if ($position) {
    echo <<<EOD
<form method="post" action="visaEnPost.php">
    <fieldset>
        <legend>Visa en post</legend>
        <p><label>position<br><input type="number" name="position" value="$position" readonly></label></p>
        <p><input type="submit" name="visa" value="visa"></p>
    </fieldset>
</form>
EOD;
} else {
    echo "<p><strong>Välj vilken båt som ska visas.</strong></p>";
}