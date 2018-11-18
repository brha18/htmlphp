<?php

/**
 * @preserve 9d392462637af3278269fe914728fd6e
 *
 * 9d392462637af3278269fe914728fd6e
 * htmlphp
 * lab4
 * v2
 * brha18
 * 2018-11-05 00:15:37
 * v2.4.0 (2018-05-30)
 *
 * Generated 2018-11-05 01:15:37 by dbwebb lab-utility v2.4.0 (2018-05-30).
 * https://github.com/mosbth/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 4 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Basic functions
 *
 *
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a function called `sumNumbers()` that should take 2 numbers as
 * arguments and return the sum of them.
 *
 * Answer with a call to the function using the numbers 613 and 469.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function sumNumbers($arg1, $arg2)
{
    $summa = $arg1 + $arg2;
    return $summa;
}
echo sumNumbers(613, 469);

$ANSWER = sumNumbers(613, 469);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a function called `sumArray()` that should take an array as argument
 * and return the sum of all items in the array.
 *
 * Answer with a call to the function using the array: `[4,256,5,13,1]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function sumArray($inp)
{
    $sum = $inp[0] + $inp[1] + $inp[2] + $inp[3] + $inp[4];
    return $sum;
}
 echo sumArray([4,256,5,13,1]);

$ANSWER = sumArray([4,256,5,13,1]);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a function called `modArray()` that should take 2 arguments, an
 * array and a string. Replace the first item in the array with the string and
 * return the array.
 *
 * Answer with a call to the function using the arguments: `[3,652,9,74,7]`
 * and `"onion"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
function modArray($array, $arg2)
{
    //$newArray []= $array;
    // print_r($array);
    // $taUt = array_shift($array);
    array_shift($array);
    // echo "<br>ta ut " . $taUt ."<br>";
    // print_r($array);
    // echo "<br>arg2 " . $arg2 ."<br>";
    array_unshift($array, $arg2);
    //    print_r($array);
    //    echo "<br><br>";
    return $array;
}
// print_r (modArray (array(3,652,9,74,7), "onion"));
modArray(array(3,652,9,74,7), "onion");

$ANSWER = modArray(array(3,652,9,74,7), "onion");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a function called `printRange()` that should take 2 numbers as
 * arguments, start and stop. The function should add all even numbers between
 * start and stop (not including) to an array and return it.
 *
 * Answer with a call to the function using the arguments: 8 and 35.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
function printRange($start, $stop)
{
    if ($start > $stop) {
        echo "Felaktiga argument - värdet för start större än stop";
        return false;
    }
    $nyStart = $start+1;
    // echo "<br> nytt start: ".$nyStart."<br>";
    // echo "<br> stop: ".$stop."<br>";
    // $summa = 0;
    $nyArray = [];
    for ($i=$nyStart; $i<$stop; $i++) {
        // echo "i = " . $i . "<br>";
        if ($i % 2 == 0) {
            // echo "i = " . $i . " - Even,  <br>";
            array_push($nyArray, $i);
        } else {
                // echo $i . " - Odd,  <br>";
        }
    }
    // var_dump($nyArray);
    return $nyArray;
}
printRange(8, 35);

$ANSWER = printRange(8, 35);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Create a function called `combineArrays()` that takes two arrays as
 * arguments. The function should combine the arrays to one associative array
 * and return it. The first argument is the key and the second argument is the
 * value.
 *
 * Answer with a call to the function using the arguments:
 * `[green,brown,pink,white,gray,blue]` and `[frog,bear,pig,lion,wolf,whale]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
function combineArray($key, $val)
{
    $nyA = array_combine($key, $val);
    // echo "i funktionen";
    return $nyA;
}

 $k = array("green", "brown", "pink", "white", "gray", "blue");
 // print_r ($k);
 $v = array("frog", "bear", "pig", "lion", "wolf", "whale");
 // echo "<br>";print_r ($v);
 //$svar = array_combine($k, $v);
 $nyA = combineArray($k, $v);
 // print_r ($ny);
 // echo "<br>" ;

$ANSWER = combineArray($k, $v);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a function called `euroToDollar()` that takes one argument, the euro
 * amount to convert to dollars. Count 1 Euro as 1.261215 dollars. Return the
 * dollar amount of 923 Euros.
 *
 * Answer with the result as a double with 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
function euroToDollar($euro)
{
    $dollar = $euro * 1.261215;
    return $dollar;
}
$dollar = (round(euroToDollar(923), 4));
echo "svar " . $dollar; // 1164.1014

$ANSWER = 1164.1014;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a function called `inRange()` that takes one argument. The function
 * should return `true` if the argument is higher than 50 and lower than 100.
 * If the number is out of range, the function should return `false`. The
 * return type should be boolean.
 *
 * Use the argument 108 and answer with a call to the function.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function inRange($arg)
{
    if (($arg > 50) and ($arg < 100)) {
        $svar = true;
    } else {
        $svar = false;
    }
    return (boolean) $svar;
}
$svar = inRange(108);
//echo (int)$svar;
//echo "<br>true " .(int)true . "<br";
//echo "false " .(int)false . "<br>";

$ANSWER = inRange(108);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Create a function called `calculateArea()` that takes one argument, the
 * diameter of a circle. The function should return the area of the circle,
 * with 4 decimals.
 *
 * Answer with the result if the diameter is 19. ( hint: `pi()` )
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
// Arean av en cirkel får vi genom att multiplicera pi med radien i kvadrat. Radien är halva diametern.
function calculateArea($diam)
{
    $pii = pi();
    $radie = $diam/2;
    $radieKvad = $radie*$radie;
    $yta = round($pii *  $radieKvad, 4);
    // echo "<br>yta= ".$yta."<br>";
    return $yta;
}
$svar=calculateArea(19);

$ANSWER = calculateArea(19);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Create a function called `fibonacci()`. The function should use the
 * [Fibbonacci Sequence](http://en.wikipedia.org/wiki/Fibonacci_number),
 * starting with 1 and 2. Return the sum of all odd numbers in the sequence,
 * when the sequence value dont exceed 1.000.000.
 *
 * Answer with a call of the function. A Fibonacci-sequence can look like
 * this: 1, 2, 3, 5, 8, 13, 21, 34, 55 etc. You add the current value with the
 * last, i.e. `1+2=3, 3+2=5, 5+3=8 etc`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
function fibonacci($start, $add, $arg3)
{
// https://stackoverflow.com/questions/15600041/php-fibonacci-sequence
    $fibonaci = [$start,$add];
    //$fibonaci = [$add, $start];
    $sum= 0;
    $next = 0;
    for ($i=$start; $next<=$arg3; $i++) {
        $next = array_sum($fibonaci);
        if ($next <= $arg3) {
            if ($next % 2 == 0) {
                // echo "<br> " . $i . " - Even,  <br>";
                //array_push($nyArray, $i);
            } else {
                //echo "<br> aktuellt värde " . $next . " - Odd - ";
                $sum += $next;
                //echo  ", summan tom " . $next . " är " .$sum ." - Odd,  <br>";
            }
            array_shift($fibonaci);
            array_push($fibonaci, $next);
            //echo "<b>" . $next.", ";
            // $sistavarde = $next;
        }
    }
    $sum += $start;
    //echo "stoppad <br>";
    //echo "<br>svar " . $sum . " sista värdet " .$sistavarde . "<br>";
    return $sum; // 1089153
}
$svar = fibonacci(1, 2, 1000000);
echo "slut " . fibonacci(1, 2, 1000000); // 1089153

$ANSWER = $svar;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * In this exercises you should use the former functions `sumArray()` and
 * `calculateArea()`. Create a new function called `calculateMany()` that
 * takes an array with numbers as argument. For every number in the array,
 * call `calculateArea()` and store the result in a new array. The last
 * position in your new array should hold the result of a call to the function
 * `calculateArea()` where you pass the sum of the whole array, you passed as
 * argument. All numbers in the resulting array should be rounded up to
 * nearest integer.
 *
 * Answer with a call to `calculateMany()` with the array `34, 43, 41, 41,
 * 31`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function calculateMany($arrayen)
{
    echo "<br><br>Exercise 2.1 <br>";
    $totNr = 0;
    // hur många värden
    $totNr = count($arrayen);
    //$nrSista = $totNr-1;
    $area = 0;
    // $areaFloat =0;
    // echo "antal värden i arrayen: " . $totNr . "<br>";
    // echo "sista cellen i arrayen är: " . $nrSista . "<br><br>";

    $nyArray =[];
    $totSum = 0;
    $i = 0;
    // $totSumFloat = 0;
    $value = 0;
    foreach ($arrayen as $value) {
        $area = ceil(calculateArea($arrayen[$i]));
        $i++;
        // lagra värdet som integer, i en ny array
        array_push($nyArray, (int)$area);
    }
    // beräkna värdet på värden i anropet
    $totSum = ceil(sumArray($arrayen));

    // beräkna sista värdet, avrundat uppåt, för totala värdet på inparametrar
    $sistaV = ceil(calculateArea($totSum));

    echo "<br>Summa för alla invärden= " . $totSum . ", arean för denna är= " . $sistaV ."<br>";

    // lagra den sista ytan som int i arrayen
    array_push($nyArray, (intval(($sistaV))));

    // returnera arrayen som funktionen skapat
    return $nyArray;
}
// $arrayen = array(34, 43, 41, 41, 31);
// $svarEx21 = calculateMany(array(34, 43, 41, 41, 31));

// var_dump($svar); //28353
// print_r($svar);

$ANSWER = calculateMany(array(34, 43, 41, 41, 31));
// $ANSWER = $svarEx21;
// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, true);


// Wrap it up
exit($dbwebb->exitWithSummary());
