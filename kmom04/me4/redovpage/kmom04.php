<h2>Kmom04</h2>
<!-- <div class="kmom04"> -->
    <h4>Redovisningsinstruktion</h4>
<h5>Se till att följande frågor besvaras i redovisningstexten.</h5>
<ol style="margin: 0px">
    <li>Börjar du känna att du bemästrar CSS? Beskriv hur väl du kan CSS (nybörjare, erfaren).</li>
    <li>Vad tycker du om CSS så här långt in i kursen?</li>
    <li>Känns det som du greppar konceptet med php och funktioner?</li>
    <li>Gick det bra med html formulär, GET, POST och processingsidor i php?</li>
    <li>Lyckade du får ordning på hur php och sessioner fungerar?</li>
    <li>Vilken är din TIL för detta kmom?</li>
</ol>
<h4>Redovisning</h4>

<h5>Börjar du känna att du bemästrar CSS? Beskriv hur väl du kan CSS (nybörjare, erfaren).</h5>
Jag kunde en hel del om CSS tidigare men har lärt mer om hur man önskat format ska adresseras. Jag har ändrat formatet på "h5" (som används i rubriken ovan) till att vara lite annorlunda.
<br>Jag har lessnat på att bläddra upp på sidan för att komma åt knapparna så jag har försökt fixa så att menyraden är kvar. Får det inte att fungera.
<h5>Vad tycker du om CSS så här långt in i kursen?</h5>
Det börjar bli hemvant, jag leker med det för att se vad som händer. Jag använder det mer och mer för att tydliggöra i sidorna.
<h5>Känns det som du greppar konceptet med php och funktioner?</h5>
Ja, med hjälp av en massa 'echo' och liknande börjar det sätta sig. Nu har jag inte städat bort dem i lab4, kan vara bra att ha. Måste komma ihåg "return" när jag vill ha ett svar.
<br>MEN jag misslyckas med lab4 2:1. Jag har försökt få svar men det som getts påminnde om "hint" i labben. Det har jag försökt med.
Det visar samma värden som jag skrivit så jag förstår inte vad som är fel.
Jag ger upp 2:1 för att fortsätta med resten av kursen. Dessutom har kursen Design börjat och jag vill vara med på den från början.
<br>Lab4 finns i fliken Test på min hemsida.
<h5>Gick det bra med html formulär, GET, POST och processingsidor i php?</h5>
Jag hade problem med tre formulär när en inte visade sig. När jag kollat på videon <br><a href=https://www.youtube.com/watch?v=ufa0a52O5s8&t=0s&list=PLKtP9l5q3ce9vjcVFnlslTGganZfsM9J2&index=26 ></a> så löste det sig. Det visade sig att jag varit på rätt spår.
<br>Jag har insett att det är skillnad på "./sessionpage.php?page=post-resultat" och "./sessionpage/post-resultat.php".
<br>I min sido-meny finns två sidor (Hantera utskick/post-process.php och Hantera meddelande/post-process-medd) som inte borde(?) visas. Tar jag bort den ur sessionpage.php får jag till svar att sidan saknas. Har inte kommit på varför de måste vara. Det kanske inte är något fel :-).
Sidan "Hantera meddelande" kan inte nås av (nu) förklarliga skäl - den innehåller bara vidaresändning, dvs inget som ska visas.
<h5>Lyckade du får ordning på hur php och sessioner fungerar?</h5>
Ja, inga större problem med att starta/stänga eller att skriva/läsa.
<h5>Vilken är din TIL för detta kmom?</h5>
Som vanligt var noggrann, kolla vidon. Videon ger mycket även om där finns en massa dötid runt det viktiga som sägs/visas.
<br>Det finns många möjligheter att debugga och studera koden och dess resultat, inte bara verifiera med de fyra som finns i foten, utan även direkt i sidan t.ex. "Inspect element" och "View Page Sourse".
<br>"View Page Sourse" visade att något var fel i koden som gäller multisidorna.
Innehållet i functions.php visades med röd text. Jag hittade felet, includen låg på fel ställe. Includen ligger nu i headern i "incl" och funktionsfilen i "src". Då ser anropet ut så här "require __DIR__ . "/../src/functions.php";".
<br>Jag börjar nu, i kmom04, inse att det inte bara är mig det är fel på när jag inte begriper labb-uppgifterna. De är inte så klart beskrivna.
<br>Oerhört beskt att inte fixa lab för att man inte förstår vad som förväntas.
