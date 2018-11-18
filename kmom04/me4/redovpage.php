<?php
/* En enkel sidkontrollerare */

/*Multisidan skall ha en default-sida som visas om ?page inte finns eller om page saknar ett värde.
Navigeringen till sidan skall genereras automatiskt utifrån en array av giltiga sidor.
Gör så att menyvalet i navigeringsmenyn blir aktivt.
Du skall visa en annorlunda stil för menyvalet för den undersida som är vald.
*/

// echo "--file-- " . __FILE__ . "<br>";
// echo "--dir-- " . __DIR__ . "<br>";

// Inkludera konfigfil
// include("../config.php");
// $title = "Min redovisningssida" . $baseTitle;
$title = "Min redovisningssida | htmlphp";
include("incl/header.php");
?>

<?php
// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";
// echo "<br> pageReference: " . $pageReference . "<br>";

// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");
// echo "<br> base: " . $base . "<br>";

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Introduktion",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "kmom01" => [
        "title" => "kmom01",
        "file" => __DIR__ . "/$base/kmom01.php",
    ],
    "kmom02" => [
        "title" => "kmom02",
        "file" => __DIR__ . "/$base/kmom02.php",
    ],
    "kmom03" => [
        "title" => "kmom03",
        "file" => __DIR__ . "/$base/kmom03.php",
    ],
    "kmom04" => [
        "title" => "kmom04",
        "file" => __DIR__ . "/$base/kmom04.php",
    ],
    "kmom05" => [
        "title" => "kmom05",
        "file" => __DIR__ . "/$base/kmom05.php",
    ],
    "kmom06" => [
        "title" => "kmom06",
        "file" => __DIR__ . "/$base/kmom06.php",
    ],
    "kmom10" => [
        "title" => "kmom10",
        "file" => __DIR__ . "/$base/kmom10.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

if (!$page) {
    die("<br>Sidan " . $page ." saknas");
}

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404 - Sidan saknas!";

// echo $title;

// Render the page
// Inkludera header för multisidan

include("./view/redovheader.php");

// Include the main multipage content through the view template file
require __DIR__ . "/view/viewpage.php";

// Inkludera min footer
include("./view/redovfooter.php");
include("incl/footer.php");
