<aside>
    <!-- Anropas från viewpage.pphp -->
    <nav class="viewpage">
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
