<?php
   error_reporting(-1);              // Report all type of errors
   ini_set("display_errors", 1);     // Display all errors
?>
<?php
//echo $unknown;
?>
<?php
$title = "Min redovisningssida | htmlphp";
// $title = "Min redovisningssida" . $baseTitle;
include("incl/header.php");
?>

<main>
    <article>
        <h1>Redovisning</h1>
        <h2>Kmom01</h2>
        <div class="kmom01">
            <h4>Min miljö mm</h4>
            Jag använder Windows 10, Atom, Cygwin och Firefox för att testa mina sidor. Har även IE och Google Chrome installerat.
            <br>Jag provade att använda Notepad++ tills jag insåg att det hela borde vara mycket enklare med Atom.
            <br>Jag har ingen erfarenhet av PHP och inte så stor erfarenhet av HTML och CSS men har arbetat en del med XML och SQL.
            <h4>Problem</h4>
            Jag har haft en hel del problem med installation av vissa delar labbmiljön.
            <br>Misslyckades att installera Git så att det kan nås från CMD. Det har jag inte fixat ännu.
            <br>Men det största har varit att få till installationen av Atom.
            Den nekade och påstod, trots att jag var inloggad som admin, att jag måste vara administratör.
            Hur som - jag använder Atom och startar den från Cygwin som jag startat som administratör ”Kör som administratör”.
            <br>(Jag har tidigare haft ett annat liknande problem med miljön då jag ville installera MS Office 365 och startade i MS IS. Då jag använde Google crome hade jag rätt behörighet.)
            <br>Jag fick en fråga ”Are you sure you want to continue connecting (yes/no)?”
            som jag inte svarade yes på eftersom jag inte fattade. Besvarade frågan senare med yes.
            <br>Ett annat problem, som jag inte löst, är att alla filer jag skapar hamnar
            på <code> C:\Programfiler\Cygwin\home\Britt\dbwebb-kurser\htmlphp\me\</code>.
            Det gör att jag ibland får texten <code>Unable to save file: Permission denied 'C:\Programfiler\Cygwin\home\Britt\dbwebb-kurser\htmlphp\me\kmom01\me\me.php'</code>.
            Försökt få till att de ska hamna i annan mapp men gett upp (just nu) för att komma vidare.

            <h4>TIL</h4><p>
                Jag har lärt en hel del
                <br>- Massor
                <br>- Hakarna ska vara åt rätt håll
                <br>- En ”.” måste ibland finnas först på raden i CSS
                <br>- Att ladda ner bilder från dbwebb ger ibland bilder som är korrupta och visas inte
                <br>- Jag har en egen bild som är stående men på min sida visas den liggande. Jag vet ännu inte hur det ska fixas.
                <br>- Att bilderna inte får ha annan filtyp än vad som står i filen tex .jpg är inte lika .JPG.
                <br>- Att det gäller att stå i rätt mapp när arbetet ska valideras och publiseras.
            </p>
        </div>
        <h2>Kmom02</h2>
        <div class="kmom02">
            <h4>Erfarenheter mm</h4><p>
            <p>Jag har inte så stor erfarenhet av html och/eller css sedan tidigre. För många år sedan arbetade jag med uppmärkning av dokument i stordtormiljö. </p>
            <p>Jag tycker det är klumpigt med val av sidor högst upp när det är långa sidor.</p>
            <p>Jag har ingen erfarenhet av php sedan tidigare men jag har arbetat med xml och sql.</p>
            <p>PHP-labb var kul men krånglig. Fattade så småningom att man ibland skulle ta bort även citat-tecknen.</p>
            <p><strong>OBS!</strong> <br>Länken "https://dbwebb.se/guide/kom-igang-med-programmering-i-php/varden-och-skalara-typer/variabler" på sidan "https://dbwebb.se/guide/kom-igang-med-programmering-i-php/varden-och-skalara-typer" ger "404".</p>
            <h4>TIL</h4><p>
                Nu vet jag
                <ul>
                    <li>hur bilden på hunden hamnar i textenOm Klas</li>
                    <li>att det inte blir bra med en kommentar på rad 1</li>
                    <li>att en footer inte kan ligga i en annan footer. Det var inte heller min avsikt och då är det svårt att hitta.</li>
                    <li>att hanteringen av space och blankrader är väldigt viktigt i css.</li>
                    <li>att det inte behöver vara samma style på alla länkar</li>
                    <li>glöm inte sluthaken "}". Det ger "... syntax error, unexpected end of file in ..." eller likn.</li>
                    <li>hur man roterar en bild</li>
                    <li>hur man gör en punkt-lista (undras hur man får punkten längre till vänster)</li>
                </ul>
            <br>
            <p><a href="lab2.php">Titta på labb2 här</a></p>
        </div>
        <h2>Kmom03</h2>
        <div class="kmom03">
        <h4>Min miljö mm</h4>
        <p>Nu börjar miljöproblemen igen. Går genom och försöker köra exempelkoden. Jag får felmeddelande <br>
            "Fatal error:  require(): Failed opening required 'C:\Programfiler\Cygwin\home\Britt\dbwebb-kurser\htmlphp\me\kmom03\me3/multipage/get-samples.php' (include_path='C:\xampp\php\PEAR') in C:\Programfiler\Cygwin\home\Britt\dbwebb-kurser\htmlphp\me\kmom03\me3\view\multipage.php on line 8"
            Kanske inte så konstigt eftersom det är där servern finns.
            <p>Jag har letat och letat och jämfört min kod med exempelkoden - ingen skillnad! till slut upptäckte jag att mapparna inte var likadana.
                Jag saknade mappen 'multipage' under kmom03/me3. När jag ändrat detta till kmom03/me3/multipage fungerade koden.<br>Vad lärde jag av detta? Just nu inget, är bara glad att jag fått det att snurra.
                Med tiden kommer jag att förstå hur det hänger ihop. Nu måste jag ta bort alla 'echo' och 'var_dump' och fortsätta med uppgiften och labben.</p>
        <p>Problemet löste sig med tiden i koden.</p>
        <h4>Programmering mm</h4>
        <p>Därefternya svårigheter. De uppkommer främst av att jag inte haft tålamod att hitta/upptäckt de genomgångar som finns.
            Det gäller bl.a. att länkarna i multisidan ska ha olika utseende då sidan visas. Jag har jobbat ganska mycket med bakgrund till innehåll, sidhuvud och sidfot för multisidan.
            Bakgrunden är inte bra då texten är kort, det är ngt mismatch med articlarna (tror jag). <Strong>Det är också fixat nu.</strong>
        </p>
        <h4>Validate</h4>
        <p>Vid dbwebb validate multi får jag felmeddelandet "Not a valid combination course: 'htmlphp' and item: 'multi'."
        Jag har fått det tidigare också men kommer inte ihåg hur jag kom vidare. Nu körde jag validate på m3 i stället och då gick det bra.
        </p>
        <p>Jag måste komma ihåg det där med space runt parentes och indenteringarna. Det blir många sådana fel vid validate.
        </p>
        <p>Sen blev det en del fel vid validering med HTML5, CSS, Unicorn och CSS3 också, både slarvfel och andra.
        En del hade jag kunnat se med "View page source".
        </p>
        </div>
        <h2>Kmom04 - kmom10</h2>
        <p>Redovisningstext för kmom04 - kmom10 finns under annan flik, "Redovisning".</p>
    </article>
</main>
<?php include("incl/footer.php"); ?>
