<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>
        <?php if ($title) : ?>
            <?=$title?></title>
        <?php else : ?>
            Ingen titel har angetts.
                </title>
        <?php endif; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel='shortcut icon' href='img/favicon.ico'/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <?php // include("config.php");
    require __DIR__ . "/config.php";
    require __DIR__ . "/../src/functions.php";
        ?>
</head>

<body>

    <header class="site-header">
        <img src="img/logga4.jpg" alt="logo" >
        <span class="site-title">Me-sida för Britt</span>
        <span class="site-slogan">Min första fina me-sida är på gång, moment <strong>4</strong>, uppdaterad 2018-11-07</span>
    </header>

    <nav class="navbar">
       <a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?>" href="me.php">Om mig</a>
       <a class="<?= basename($_SERVER['REQUEST_URI']) == "redovpage.php" ? "selected" : "";?>" href="redovpage.php">Redovisning</a>
       <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : "";?>" href="about.php">Om webbplatsen</a>
       <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php" ? "selected" : "";?>" href="multipage.php">Min multisida</a>
       <a class="<?= basename($_SERVER['REQUEST_URI']) == "sessionpage.php" ? "selected" : "";?>" href="sessionpage.php">Session</a>
       <a class="<?= basename($_SERVER['REQUEST_URI']) == "test.php" ? "selected" : "";?>" href="testpage.php">Test, labbar mm</a>
    </nav>
