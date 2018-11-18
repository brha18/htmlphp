<?php include("incl/header.php"); ?>

    <h2>Labbar</h2>
    <p>Detta är Britts labbar i kursen "htmlphp".    </p>
    <h4>Övn 1:1</h4>
    <?php
        $numOne = 219;
        $numTwo = 25;
        $svarSum = $numOne+$numTwo;
        echo "numOne är: " . $numOne  . "<br />";
        echo "numTwo är: " . $numTwo . "<br />";
        echo "Summan är: ". $svarSum . "<br />";
    ?>

    <h4>Övn 1:2</h4>
    <?php
        $svarSub = $numTwo-$numOne;
        $numOne = 219;
        $numTwo = 25;
        echo "numOne är: " . $numOne . ".";
        echo "<p>numTwo är: " . $numTwo . ".</p>";
        echo "Subtraktionen blir: ". $svarSub . "<br />";
    ?>
    <h4>Övn 1:3</h4>
    <?php
        $numOne = 219;
        $numTwo = 25;
        $svarDiv = $numOne/$numTwo;
        echo "numOne är: " . $numOne . "<br />";
        echo "<p>numTwo är: " . $numTwo . "<br />";
        echo "Resultatet är: ".  round($svarDiv, 1) . "<br />";
    ?>

    <h4>Övn 1:4</h4>
    <?php
        $floatOne = 432.03;
        $floatTwo = 15.7;
        $sumFloat = $floatOne+$floatTwo;
        echo "floatOne är: " . $floatOne  . "<br />";
        echo "floatTwo är: " . $floatTwo . "<br />";
        echo "Floatsumman är: ". round($sumFloat, 2) . "<br />";
    ?>

    <h4>Övn 1:5</h4>
    <?php
        $floatOne = 432.03;
        $floatTwo = 15.7;
        $subFloat = $floatTwo-$floatOne;
        echo "floatOne är: " . $floatOne . "<br />";
        echo "floatTwo är: " . $floatTwo . "<br />";
        echo "Floatsubben är: ". round($subFloat, 3) . "<br />";
    ?>

    <h4>Övn 1:6</h4>
    <?php
        $floatOne = 432.03;
        $floatTwo = 15.7;
        $floatThree = 67.72;
        $numOne = 219;
        $sumFloat = $floatOne+$floatTwo;
        $multFloat = $sumFloat*$floatThree;
        $divFloat = $multFloat/$numOne;
        echo "numOne är: " . $numOne  . "<br />";
        echo "floatOne är: " . $floatOne  . "<br />";
        echo "floatTwo är: " . $floatTwo  . "<br />";
        echo "floatThree är: " . $floatThree  . "<br />";
        echo "sumFloat är: " . $sumFloat . "<br />";
        echo "divFloat är: " . $divFloat . "<br />";
        echo "Det blandade blir: ". round($divFloat, 4) . "<br />";
    ?>

    <h4>Övn 1:7</h4>
    <?php
        $modOne = 829;
        $modTwo = 99;
        $numMod = $modOne % $modTwo;
        echo "modOne är: " . $modOne . ".", "<br />";
        echo "modTwo är: " . $modTwo . ".", "<br />";
        echo "numMod är: " . $numMod . ".", "<br />";
    ?>
    <h4>1:Riskorn</h4>
    <?php
        $antRutor = 8*8-1;
        $raknaMed = 2;
        $antKorn = pow($raknaMed, $antRutor);
        $antKorn =$antKorn+1.0; // ett korn för lite
        echo "Antal rutor: " . $antRutor . ".", "<br />";
        echo "Antal korn: " . $antKorn . ".", "<br />";
        printf("%f <br>", $antKorn);
        echo "Antal korn är en float/double ";
        var_dump($antKorn);
    ?>

    <h4>1:Summa tal</h4>
    <?php
        //5050 = 100 * (1+100)/2
        $maxTal = 100;
        $raknaSteg = 1;
        $startTal = 1;
        $summaTal=$maxTal*($raknaSteg+$maxTal)/2;
        echo "Talsumman: " . $summaTal . ".", "<br />";
        echo "Talsumman är en ";
        var_dump($summaTal) ;
    ?>
<?php include("incl/footer.php"); ?>
