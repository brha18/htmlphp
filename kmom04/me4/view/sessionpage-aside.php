<aside>
    <nav class="sessionpage">
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <?php
            // echo "?page=$key<br>";
            // echo "$pageReference<br>";
            $selected = null;
            if ($key===$pageReference) {
                $selected = "class=\"selected\"";
            }
            ?>
            <li><a <?= $selected ?> href="?page=<?= $key ?>"><?= $value["title"] ?></a></li>
        <?php endforeach; ?>
        </ul>
    </nav>

</aside>
