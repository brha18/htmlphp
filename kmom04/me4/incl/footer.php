
            <?php include("incl/byline.php");
                $numFiles   = count(get_included_files());
                $memoryUsed = memory_get_peak_usage(true);
                $loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
            ?>
        <footer id="site-footer">
            <p>Time to load page: <?=round($loadTime, 4) ?>. Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed ?>.</p>
            <p>Specifikationer
                <a href="http://www.w3.org/2009/cheatsheet/">Cheatsheet</a>
                <a href="http://dev.w3.org/html5/spec/">HTML5</a>
                <a href="http://www.w3.org/Style/CSS/current-work#CSS3">CSS3</a>
            </p>
            <p>Manualer
                <a href="http://php.net/manual/en/index.php">PHP</a>
            </p>
            <p>Kursmoment instruktioner
                <a href="https://dbwebb.se/kurser/htmlphp-v3/kmom01">För mom 01</a>
                <a href="https://dbwebb.se/kurser/htmlphp-v3/kmom02">För mom 02</a>
                <a href="https://dbwebb.se/kurser/htmlphp-v3/kmom03">För mom 03</a>
                <a href="https://dbwebb.se/kurser/htmlphp-v3/kmom04">För mom 04</a>
            </p>
            <p>Övningar
                <a href="https://dbwebb.se/kunskap/skapa-en-webbsida-med-html-css-och-php">Övn mom 01</a>
                <a href="https://dbwebb.se/kunskap/skapa-en-webbsida-med-html-css-och-php-steg-2">Övn mom 02</a>
                <a href="https://dbwebb.se/guide/kom-igang-med-programmering-i-php">Lab 2</a>
                <a href="https://dbwebb.se/uppgift/bygg-en-multisida-och-testa-arrayer-v2">Övn mom 03: Bygg en multisida</a>
                <a href="https://dbwebb.se/uppgift/bygg-ut-din-htmlphp-me-sida-till-version-3-v2">Övn mom 03: me-sida version 3</a>
            </p>
        </footer>
        <footer class="validera">
            <p>Validera sidan
                <a href="http://validator.w3.org/check/referer">HTML5</a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
                <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
            </p>
        </footer>

    </body>
</html>
