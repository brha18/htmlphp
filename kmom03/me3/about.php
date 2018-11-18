<?php
   error_reporting(-1);              // Report all type of errors
   ini_set("display_errors", 1);     // Display all errors
?>
<?php
//echo $unknown;
?>
<?php
$title = "Min sida om webbplatsen| htmlphp";
include("incl/header.php"); ?>

<?php
    $uri = $_SERVER["REQUEST_URI"];
    // echo "URI: $uri\n";

    $uriFile = basename($uri);
    // echo "URI file part: $uriFile\n";
?>
<main>
    <article>
        <h1>Om den här webbplatsen</h1>
        <p>Här utvecklas Britts egen fina me-sida.</p>
    </article>
</main>
        <?php include("incl/footer.php"); ?>
