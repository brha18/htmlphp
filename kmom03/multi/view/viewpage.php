<div class="wrap-main">

<?php require __DIR__ . "/viewpage-aside.php" ?>

    <main>
        <article class="multipage">
            <?php if ($page) : ?>
                <?php require $page["file"] ?>
            <?php else : ?>
                <p>You have selected a page reference '<?= htmlentities($pageReference) ?>' that does not map to an actual page.</p>
            <?php endif; ?>
        </article>
    </main>
</div>
