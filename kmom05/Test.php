<?php
// Definera sökvägen till filen (databasen).
// Enable verbose output of error (or include from config.php)
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

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

// Prepare and execute the SQL statement
$stmt = $db->prepare("SELECT * FROM jetty");
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>", print_r($res, true), "</pre>";

// Förbered, prepare, en SQL-sats.
// Prepare and execute the SQL statement
$sql = "SELECT * FROM jetty";
$stmt = $db->prepare($sql);

// Utför, execute, SQL-satsen.
echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();

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
EOD;
