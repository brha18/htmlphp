<?php

/**
 * @preserve 8989b6b10f31fc27042cdd037dd435ae
 *
 * 8989b6b10f31fc27042cdd037dd435ae
 * htmlphp
 * lab3
 * v2
 * brha18
 * 2018-10-03 08:35:38
 * v2.4.0 (2018-05-30)
 *
 * Generated 2018-10-03 10:35:39 by dbwebb lab-utility v2.4.0 (2018-05-30).
 * https://github.com/mosbth/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 3 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Arrays - with numeric index
 *
 *
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create an array, called `countries` with the items: `[Russia, France,
 * Norway]`.
 *
 * Answer with the second item in the array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$countries = ["Russia", "France", "Norway"];
$land = $countries[1];
// echo "<br> uppg 1: " . $land . "<br>";


$ANSWER = "France";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new array called `capitals` with the items: `[Moscow, Paris,
 * Oslo]`.
 *
 * Answer with a string containing each country from the `countries`-array
 * followed by the corresponding capital. Use the format `"country = capital,
 * country = capital..."`
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$capitals = ["Moscow", "Paris", "Oslo"];

$geo = $countries[0] . " = " . $capitals[0] . ", " .$countries[1] . " = " . $capitals[1] . ", " .$countries[2] . " = " . $capitals[2] ;
//echo "<br> geo: " . ($geo);

$ANSWER = $geo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[285, 11, 9.75, 9,
 * 2216]`. Answer with the sum of the first two items.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [285, 11, 9.75, 9, 2216];
$adderat = $numbers1[0]+$numbers1[1];
// echo $adderat;

$ANSWER = 296;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Use your arrays `numbers1` and `capitals` to change item at index 0 in
 * `numbers1` to the item at index 1 in `capitals`. Answer with the array
 * `numbers1`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$numbers1[0]=$capitals[1];

$ANSWER = $numbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use your array `countries` and concatenate the first and the last item as a
 * string. Separate the items with a hyphen `-` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$sista = array_keys($countries)[count($countries)-1];

$firstLast = $countries[0] . "-" . $countries[$sista];
// Echo  $firstLast;

$ANSWER = $firstLast;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Arrays - with keys
 *
 *
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Use your `countries` and `capitals` arrays and create another array called
 * `keyArray`. The country should be the key and the capital should be the
 * value. Answer with the new array. (hint: `"country" => "capital"`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$keyArray = array_combine($countries, $capitals);

$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Add the key `"India"` with the value `"New Delhi"` to your `keyArray`.
 * Answer with the updated array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$addera=array("India"=>"New Delhi");
$keyArray=(array_merge($keyArray, $addera));

$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Answer with the value for the key `"Russia"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$svar = $keyArray["Russia"];

$ANSWER = "Moscow";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Arrays - built-in functions
 *
 *
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Find the number of items in the array `[285, 11, 9.75, 9, 2216]`. Answer
 * with the result as an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [285, 11, 9.75, 9, 2216];
// echo count($numbers2);

$ANSWER = 5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Sort the array `[285, 11, 9.75, 9, 2216]` in decending order. Make sure
 * that it does maintain the key association. Answer with the sorted array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

 // Sort the array `[285, 11, 9.75, 9, 2216]` in decending order.
$numbers2 = [285, 11, 9.75, 9, 2216];
arsort($numbers2);
foreach ($numbers2 as $key => $val) {
    echo "$key = $val\n";
}

$ANSWER = $numbers2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Use `pop()` on the array `[285, 11, 9.75, 9, 2216]` and answer with the
 * popped item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [285, 11, 9.75, 9, 2216];
$stack = $numbers2;
$numbers2 = array_pop($stack);

$ANSWER = 2216;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/**
 * Exercise 3.4 (1 points)
 *
 * Use `push()` on the array `[123, 25, 87.55, 2, 5466]` and insert the number
 * 669. Answer with the resulting array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers3 = [123, 25, 87.55, 2, 5466];
array_push($numbers3, 669);

$ANSWER = $numbers3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.4", $ANSWER, false);

/**
 * Exercise 3.5 (1 points)
 *
 * Copy your array `countries` to a new array called `newArray`. Use `shift()`
 * on the new array and answer with the shifted item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$newArray = $countries;

$asArray = array_shift($newArray);

$ANSWER = "Russia";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.5", $ANSWER, false);

/**
 * Exercise 3.6 (1 points)
 *
 * Use `unshift()` on your `newArray` add the items `"Montana"` and `"Oregon"`
 * in the beginning of the array. Answer with the modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

array_unshift($newArray, "Montana", "Oregon");


$ANSWER = $newArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.6", $ANSWER, false);

/**
 * Exercise 3.7 (1 points)
 *
 * Reverse the order of the array `[285, 11, 9.75, 9, 2216]`. Answer with the
 * modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers4 = [285, 11, 9.75, 9, 2216];
$input = $numbers4;
$reversed = array_reverse($input);

$ANSWER = $reversed;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.7", $ANSWER, false);

/**
 * Exercise 3.8 (1 points)
 *
 * Use `implode()` on your `capital`-array and answer with a string where each
 * item is separated by a hyphen `-`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$hypenSeparated = implode("-", $capitals);
// echo "<br> separated capitals: " . $hypenSeparated ." <br>" ;

$ANSWER = $hypenSeparated;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.8", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Arrays - for-each loop
 *
 *
 *
 */



/**
 * Exercise 4.1 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[11, 4, 41, 67, 99, 22,
 * 8, 83, 5, 16]`. Use a for-each loop to sum each item with 10 and put them
 * in a new array called `summedNumbers1`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [11, 4, 41, 67, 99, 22, 8, 83, 5, 16];

$iPlus = 1;
$i = 0;
foreach ($numbers1 as &$value) {
    $arrValue = $value +10;
    $summedNumbers1[$i] = $arrValue;
    // echo "<br>varv nr: " . $i . " ";
    $i += $iPlus;
    // echo "  arrValue " . $arrValue . "<br>";
}

 // print_r($summedNumbers1);

$ANSWER = $summedNumbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Create a new array called `numbers2` with the items `[10, 3, 45, 98, 4, 7,
 * 56, 23, 3, 1]`. Use at least a for-each loop to add all numbers larger than
 * 20 to a new array called `largeNumbers`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [10, 3, 45, 98, 4, 7, 56, 23, 3, 1];
// print_r($numbers2);

$largeNumbers = [];
foreach ($numbers2 as &$value) {
    if ($value > 20) {
        array_push($largeNumbers, $value);
    }
    // echo "<br>varv nr: " . $i . " Value " . $value . "<br>";
}
// print_r($largeNumbers);

$ANSWER = $largeNumbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, false);

/**
 * Exercise 4.3 (1 points)
 *
 * Create an array with the keys: `"one"`, `"two"`, `"three"`, `"four"` and
 * `"five"` and the values: 1, 2, 3, 4, 5. Use a foreach-loop to add all keys
 * and values to an array in the format: `["key"=value, "key"=value, etc]`.
 * Use `implode()` to make the answer a string with all items separated by a
 * comma `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sifferArray =["one" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5];
// print_r($sifferArray);
$nyArea = [];
$i=0;
foreach ($sifferArray as $key => $value) {
    $nyArea[$i] = $key . "=" . $value;
    $i++;
    // echo "<br>Nyckeln  '$key' innehåller värdet '$value'\n";
}

$commaSeparated = implode(",", $nyArea);


$ANSWER = (string)$commaSeparated;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Switch-case
 *
 * [PHP Manual about
 * switch](http://se1.php.net/manual/en/control-structures.switch.php)
 *
 */



/**
 * Exercise 5.1 (1 points)
 *
 * Create a switch-case statement to decide which continent a certain country
 * resides in. Use the countries: `"Sweden, Brazil, China, Australia, Canada"`
 * and the continents:
 *     `"Europe, South America, Asia, Oceania, North America"`.
 *
 * Answer with a test on the country: `"Australia"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$land = "Australia";
switch ($land) {
    case 'Sweden':
        $continent = "Europe";
        break;
    case 'Brazil':
        $continent = "South America";
        break;
    case 'China':
        $continent = "Asia";
        break;
    case 'Australia':
        $continent = "Oceania";
        break;
    case 'Canada':
        $continent = "North Americ";
        break;
    default:
        echo "okänd kontinent";
        break;
}
 // echo $continent;

$ANSWER = $continent;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 6.1 (3 points)
 *
 * A switch-case statement can handle multiple cases with the same result.
 * Create a new switch-case statement that decides which is the corresponding
 * continent. Use the countries: `"Sweden, Denmark, Finland, Brazil, China,
 * Australia, Canada"` and the continents: `"Europe, South America, Asia,
 * Oceania, North America"`.
 *
 * Answer with a test on the country: `"Finland"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$land = "Finland";
switch ($land) {
    case 'Sweden':
    case 'Denmark':
    case 'Finland':
        $continent = "Europe";
        break;
    case 'Brazil':
        $continent = "South America";
        break;
    case 'China':
        $continent = "Asia";
        break;
    case 'Australia':
        $continent = "Oceania";
        break;
    case 'Canada':
        $continent = "North Americ";
        break;
    default:
        echo "okänd kontinent";
        break;
}
 // echo $continent;


$ANSWER = $continent;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Sort the array `[123, 25, 87.55, 2, 5466]` in ascending order. Make sure
 * that it does not maintain the key association. Answer with the sorted
 * array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$nrArray = [123, 25, 87.55, 2, 5466];
 // echo "<br>före sortering <br>";
 // var_dump ($nrArray);

sort($nrArray);

 // echo "<br> efter sorterat acc <br>";
 // var_dump($nrArray) ;

$ANSWER = $nrArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
