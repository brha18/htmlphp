<div class="wrap-main">
<?php
    echo "<br>Sessionsnamn: " . $sessionname . ".<br>";
    require __DIR__ . "/sessionpage-aside.php"
?>
    <main>

        <article class="sessionpage">
            <?php if ($page) : ?>
                <?php require $page["file"] ?>
            <?php else : ?>
                <p>You have selected a page reference '<?= htmlentities($pageReference) ?>' that does not map to an actual page.</p>
            <?php endif; ?>
        </article>

    </main>
</div>
