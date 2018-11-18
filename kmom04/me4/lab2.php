<?php
   error_reporting(-1);              // Report all type of errors
   ini_set("display_errors", 1);     // Display all errors
?>
<?php
//echo $unknown;
?>
<?php
$title = "Min redovisningssida | htmlphp";
include("incl/header.php"); ?>
<nav class="navbar">
    <a href="me.php">Om mig</a>
    <a href="report.php">Redovisning</a>
    <a href="about.php">Om webbplatsen</a>
</nav>
<?php
   error_reporting(-1);              // Report all type of errors
   ini_set("display_errors", 1);     // Display all errors
?>
<?php
    //echo $unknown;
?>
<p>1.1 <br>
<?php

    $wordOne = "earth";
    $wordTwo = "chicken";
    $resultat = $wordOne . "-" . $wordTwo;
    echo $resultat;
?>
</p>
<p>1.2 <br>
<?php
    $floatNumber = 60.92;
    $resultat = $wordOne . "=" . $floatNumber;
    echo $resultat;
?>
</p>
<p>1.3 <br>
<?php
    $intNumber = 119;
    $resultat = $intNumber . " " . $wordTwo;
    echo $resultat;
?>
</p>
<p>1.4 <br>
<?php
    $sentence = "There are ". $intNumber . " " .$wordTwo . "'s doing some " . $wordOne . ".";
    echo $sentence;
?>
</p>
<p>1.5 <br>
<?php
    $lgd = strlen($sentence);
    echo $lgd;
?>
</p>
<p>1.6 <br>
<?php
    $str = substr("hood", 1, 1);
    echo $str;
?>
</p>
<p>1.7 <br>
<?php
    $str = substr("cattle", 2, 2);
    echo $str;
?>
</p>
<p>1.8 <br>
<?php
    $minstring = 'alligator';
    $hitta   = 't';
    $pos = strpos($minstring, $hitta);
    echo $pos;
?>
</p>
<p>1.9 <br>
<?php
    $minstring = 'alligator';
    $hitta   = 'xyz';
    $pos = strpos($minstring, $hitta);
if ($pos === false) {
    echo "Strängen '$hitta' saknas i '$minstring'";
} else {
    echo  "Strängen '$hitta' finns i '$minstring' position '$pos";
}
?>
</p>
<p>2.1 <br>
<?php
    $a = 346;
    $b = 218;
    $booltest = ($a < $b);
    echo (int)$booltest;
?>
</p>
<p>2.2 <br>
    <?php
        $c = 189;
        $d = 70;
        $booltest2 = ($c > $d);
        echo ($c > $d); // ger ". ($booltest2 ? "true" : "false");
    ?>
</p>
<p>2.3 <br>
<?php
    $totalsum = 8 + 7 + 5 + 6 + 10;
    $jmf = 35;

    echo "totalsum= " . $totalsum;
    echo ", jmf= " . $jmf ;
    echo " ";
if ($totalsum == $jmf) {
    echo "equal";
} elseif ($totalsum > $jmf) {
        echo "higher";
} else {
        echo  "lower";
}
?>
</p>
<p>2.4 <br>
    <?php
    $bool_V = true;
    $totalsum = 8 + 7 + 5 + 6 + 10;
    echo "totalsum= " . $totalsum . "  ";
    if ($totalsum < 37 && $totalsum > 27) {
        $bool_V = true;
    } else {
        $bool_V = false;
    }
    echo $bool_V;
    ?>
</p
<p>3.1 <br>
    <?php
    $nrStart = 20;
    $addNr = 9;
    $nrAnt = 69;
    $nrRakn = 1;
    echo "startar med värde '$nrStart' .<br>";
    while ($nrRakn <= $nrAnt) {
        $nrStart = ($nrStart + $addNr);
    //    echo "värde '$nrStart' efter  '$nrRakn' varv.  <br>";
        $nrRakn++;
    }
    echo "slutar med '$nrStart' efter '($nrRakn-1)' loopar .\n";
    ?>
</p>
<p>3.2 <br>
    <?php
    $nrStart = 908;
    $nrSubstr = 6.46;
    $nrRakn = 1;
    echo "startar med värde '$nrStart' .<br>";
    while ($nrStart > 30
     && $nrStart > 40 ) {
        $nrStart = ($nrStart - $nrSubstr);
        echo "värde '$nrStart' efter  '$nrRakn' varv.  <br>";
        $nrRakn ++;
    }
    echo "Resultat " . round($nrStart, 2) . ". <br>";
    ?>
</p>
<p>3.3 <br>
<?php
echo "Raden ser ut så här: \n";
$txtSvar;
for ($i = 0; $i <= 13; $i++) {
    if ($i < 13) {
        echo "$i,";
    } else {
        echo "$i \n";
    }
}

// echo "'$i'.\n";
?>
</p>
<p>4.1<br>
<?php
$resultat = 0;
for ($i = 30; $i <= 40; $i++) {
    if ($i%10 ==0) {
            //echo "nolla <br>";
    } else {
        if ($i%2 ==0) {
                    $pii = pi();
                    $y = $pii *$i;
                    $resultat = $resultat + $y;
                    echo "jämn '$i', pi*   = '$y'resultat '$resultat' <br>";
        } else {
                    $sqr = sqrt($i);
                    $resultat = $resultat - $sqr;
                    echo "udda '$i', roten= '$sqr'  resultat '$resultat'<br>";
        }
    }
}
$res = ceil($resultat);
echo "resultat '$resultat'<br>  avrundat '$res'";
?>
</p>
