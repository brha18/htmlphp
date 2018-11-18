 <?php
    error_reporting(-1);              // Report all type of errors
    ini_set("display_errors", 1);     // Display all errors
?>
<?php
//echo $unknown;
?>
<?php
    $title = "Min me-sida | htmlphp";
    include("incl/header.php");
    /* kommentar mellan <?php och ?> */
?>


<main>
    <article>
        <header>
            <h1>Om mig</h1>
            <p class="author">Uppdaterad <time datetime="2018-09-26 11:17:43">26:e september 2018</time> av Britt Hallin</p>
        </header>
        <h1>Om mig själv</h1>

        <p>Detta är Britts "me-sida" i kursen "htmlphp".</p>
        <p>Mitt namn är Britt Hallin, pensionär som behöver underhålla de hjärnceller som fortfarande finns kvar. Jag har arbetat med ADB och/eller data i större delen av mitt liv. Det har varit allt från programmerare till operatör.

        <div class="minBild">
            <img src="img/hund.jpg" class="hund" alt="Min daghund">
            <p>Jag är inte något att se så jag lägger in en bild på min "daghund" i stället.</p>

        </div>

        Jag kommer från Dalarna, närmare bestämt Mora, och har kvar mitt barndomshem. Numera bor jag i Bromma.
        <p>Mina intressen är trädgård (jag är ju pensionär), hundar och hästar.</p>
        Jag har en odlingslott i <i><a href="https://rackstakoloni.se/">Råcksta Fritidsträdgårdar</a></i> och är dagmatte åt en liten <a href="https://www.skk.se/sv/hundraser/yorkshireterrier/"><u><span style="color:rgba(63, 191, 95, 0.88)">yorkshireterriertik</span></u></a>.
        Jag hade häst i mer än 30 år. De var tre engelska fullblod och ett svenskt halvblod, varav ett köpt och de övriga min uppfödning.
        Hade jag skaffat häst idag hade det blivit en lusitano, läs mer i <a href="http://www.cavalo-lusitano.com/"><sup>Lusitanons portugisiska stambok</sup></a>.
        <p><strong>Detta är skoj men vad visade de på TV igår?   </strong></p>
        <p>    Denna webbplats är byggd i HTML, CSS och PHP och är en del i kursen htmlphp.
        </p>
        <div class="vinter">
            <img src="img/snow.jpg" class="snow" alt="Bild på något annat än mig">
            <br>Den här bilden på vinterns snö har jag kunnat rotera nu när jag lärt mig lite mer.
        </div>
    </article>
</main>
<?php include("incl/footer.php"); ?>
