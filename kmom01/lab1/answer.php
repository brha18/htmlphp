<?php

/**
 * @preserve a40382a0df0c67f586f2a452e38c5865
 *
 * a40382a0df0c67f586f2a452e38c5865
 * htmlphp
 * lab1
 * v2
 * brha18
 * 2018-09-14 11:06:46
 * v2.4.0 (2018-05-30)
 *
 * Generated 2018-09-14 13:06:46 by dbwebb lab-utility v2.4.0 (2018-05-30).
 * https://github.com/mosbth/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 1 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Integers, floats and basic arithmetics
 *
 * The foundation of numbers and basic arithmetic.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create two variables called `numOne` and `numTwo` and assign to them the
 * values 219 and 25.
 *
 * Sum up the variables and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

     $numOne = 219;
     $numTwo = 25;
     $svarSum = $numOne+$numTwo;
     echo "numOne är: " . $numOne  . "<br />";
     echo "numTwo är: " . $numTwo . "<br />";
     echo "Summan är: ". $svarSum . "<br />";
     // korrekt svar 244

$ANSWER = 244;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, true);

/**
 * Exercise 1.2 (1 points)
 *
 * Use your two variables `numOne` and `numTwo`. Subtract `numOne` from
 * `numTwo` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

        $svarSub = $numTwo-$numOne;
     $numOne = 219;
     $numTwo = 25;
     echo "numOne är: " . $numOne . ".";
     echo "<p>numTwo är: " . $numTwo . ".</p>";
     echo "Subtraktionen blir: ". $svarSub . "<br />";


$ANSWER = -194;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Divide `numOne` with `numTwo` and use the function `round()` to round the
 * answer to 1 decimal.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

     $numOne = 219;
     $numTwo = 25;
     $svarDiv = $numOne/$numTwo;
     echo "numOne är: " . $numOne . "<br />";
     echo "<p>numTwo är: " . $numTwo . "<br />";
     echo "Resultatet är: ".  round($svarDiv, 1) . "<br />";
// korrekt svar

$ANSWER = 8.8;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a variable called `floatOne` and give it the value 432.03. Create
 * another variable called `floatTwo` and give it the value 15.7. Sum up the
 * variables and answer with the result rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

     $floatOne = 432.03;
     $floatTwo = 15.7;
     $sumFloat = $floatOne+$floatTwo;
     echo "floatOne är: " . $floatOne  . "<br />";
     echo "floatTwo är: " . $floatTwo . "<br />";
     echo "Floatsumman är: ". round($sumFloat, 2) . "<br />";



$ANSWER = 447.73;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Subtract `floatOne` from `floatTwo`, round up to 3 decimals and answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

     $floatOne = 432.03;
     $floatTwo = 15.7;
     $subFloat = $floatTwo-$floatOne;
     echo "floatOne är: " . $floatOne . "<br />";
     echo "floatTwo är: " . $floatTwo . "<br />";
     echo "Floatsubben är: ". round($subFloat, 3) . "<br />";


$ANSWER = -416.33;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a variable called `floatThree` and give it the value 67.72.  Add
 * `floatOne` to `floatTwo` and multiply the result with `floatThree`, take
 * that result and divide it by `numOne`.
 *
 * Answer with the result rounded to 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

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



$ANSWER = 138.4487;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a variable `modOne` with a value of 829 and a variable `modTwo`
 * holding the value 99.
 *
 * Answer with the result of `modOne` modulo (%) `modTwo`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

     $modOne = 829;
     $modTwo = 99;
     $numMod = $modOne % $modTwo;
     echo "modOne är: " . $modOne . ".", "<br />";
     echo "modTwo är: " . $modTwo . ".", "<br />";
     echo "numMod är: " . $numMod . ".", "<br />";


$ANSWER = 37;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * You are going to solve the well-known 'chessboard and rice grain problem'.
 *
 * Imagine you have a standard chessboard and put one rice grain on the first
 * square. Then you put two grains on the second square, four on the third,
 * eight on the fourth and so on... How many rice grains are there on the last
 * square?
 *
 * Answer with the square root of the result, rounded to 2 decimals. (Make
 * sure the answer is of the type `double`).
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

    $antRutor = 8*8-1;
    $raknaMed = 2;
    $antKorn = pow($raknaMed, $antRutor);
    $antKorn =$antKorn+1.0; // ett korn för lite
    echo "Antal rutor: " . $antRutor . ".", "<br />";
    echo "Antal korn: " . $antKorn . ".", "<br />";
    printf("%f <br>", $antKorn);
    echo "Antal korn är en float/double ";
    var_dump($antKorn);

$ANSWER = 9223372036854775808.000000;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (3 points)
 *
 * Sum all numbers from 1 to 100. Answer with the result. (Make sure the
 * answer is of the type `integer`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

     //5050 = 100 * (1+100)/2
     $maxTal = 100;
     $raknaSteg = 1;
     $startTal = 1;
     $summaTal=$maxTal*($raknaSteg+$maxTal)/2;
     echo "Talsumman: " . $summaTal . ".", "<br />";
     echo "Talsumman är en ";
     var_dump($summaTal) ;

// korrrekt

$ANSWER = 5050;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
