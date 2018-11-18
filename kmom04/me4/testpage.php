<?php
   error_reporting(-1);              // Report all type of errors
   ini_set("display_errors", 1);     // Display all errors
?>
<?php

/**
 * This is a page controller för sessionssidan.
 * Det ska finnas en mapp med samma namn.
 * sessionpage.
 * sessionpage<?php
 */
// Include the configuration file, det görs i sidhuvudet head.php
// include(__DIR__ . "/config.php");

// Include essential functions OBS detta gör att den visas med rött i View Source Page!! Varför?
// include(__DIR__ . "/src/functions.php");

// Set common variables, these are exposed to the view template files
$title = "Sessionssidan | htmlphp";
include("incl/header.php");

// Get what subpage to show, defaults to siffra
$pageReference = $_GET["page"] ?? "index";
// echo "<br> pageReference: " . $pageReference . "<br>";

// Get the filename of this sessionpage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

//echo "<br> base: " . $base . "<br>";

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Information om testsidan",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "lab4" => [
        "title" => "Lab4",
        "file" => __DIR__ . "/$base/lab4.php",
    ],
    "test" => [
        "title" => "Tester",
        "file" => __DIR__ . "/$base/test.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | htmlphp";

if (!$page) {
    die("<br>Sidan " . $page ." saknas");
}

// Include the page header through the view template file
require __DIR__ . "/view/testheader.php";

// Get content from a file
// $content = file_get_contents(__DIR__ . "/content/my-blog-article.txt");

// Render a view using a templatefile
// require __DIR__ . "/view/article.php";

// Include the main sesionpage content through the view template file
require __DIR__ . "/view/viewpage.php";

// Inkludera min footer
include(__DIR__ . "/view/testfooter.php");
include(__DIR__ . "/incl/footer.php");
