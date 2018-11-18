<?php

/**
 * @preserve 214c06decd95573efe1ee699eac51757
 *
 * 214c06decd95573efe1ee699eac51757
 * htmlphp
 * lab2
 * v2
 * brha18
 * 2018-09-21 09:49:36
 * v2.4.0 (2018-05-30)
 *
 * Generated 2018-09-21 11:49:36 by dbwebb lab-utility v2.4.0 (2018-05-30).
 * https://github.com/mosbth/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 2 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Strings and basic string operations
 *
 * The foundation for strings.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a variable called `wordOne` and assign the word `"earth"` to it.
 *
 * Create another variable called `wordTwo` and assign the word `"chicken"` to
 * it.
 *
 * Concatenate the two strings, and separate them by a hyphen `-`, into a new
 * variable called `result`.
 *
 * Answer with the result-variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$wordOne = "earth";
$wordTwo = "chicken";
$result = $wordOne . "-" . $wordTwo;
echo $result;


$ANSWER = "earth-chicken";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a variable, `floatNumber`, and assign the value 60.92. Concatenate
 * your variable `wordOne` with your variable `floatNumber`, separate the
 * words with a `=`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$floatNumber = 60.92;
$wordOne = "earth";
$resultat = $wordOne . "=" . $floatNumber;
echo $resultat;


$ANSWER = "earth=60.92";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a variable, `intNumber`, and assign the value 119. Concatenate your
 * variable `intNumber` with your variable `wordTwo`, separate the words with
 * a space. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$intNumber = 119;
$wordTwo = "chicken";
$resultat = $intNumber . " " . $wordTwo;
echo $resultat;

$ANSWER = "119 chicken";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create the string: `"There are 119 chicken's doing some earth."` by
 * combining pure text with the values of your variables `wordOne`, `wordTwo`
 * and `intNumber`. Store the resulting text in a variable `sentence`. Answer
 * with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sentence = "There are ". $intNumber . " " .$wordTwo . "'s doing some " . $wordOne . ".";
echo $sentence;


$ANSWER = $sentence;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use `strlen()` to find the length of the variable `sentence`. Answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$lgd = strlen($sentence);
echo $lgd;


$ANSWER = 41;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Use `substr()` to find the character at index 1 in the word `"hood"`.
 * Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$str = substr("hood", 1, 1);
echo $str;

$ANSWER = "o";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Use `substr()` to find the two characters at index 3 and 4 in the word
 * `"cattle"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$str = substr("cattle", 3, 2);
echo $str;

$ANSWER = $str;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Use `strpos()` to find the first matching index of the character `t` in the
 * word `"alligator"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$minstring = 'alligator';
$hitta   = 't';
$pos = strpos($minstring, $hitta);
echo $pos;

$ANSWER = 6;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Use `strpos()` to find the first matching, (if any), index of the
 * characters `xyz` in the word `"alligator"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$minstring = 'alligator';
$hitta   = 'xyz';
$pos = strpos($minstring, $hitta);
if ($pos === false) {
     echo "Strängen '$hitta' saknas i '$minstring'";
} else {
          echo  "Strängen '$hitta' finns i '$minstring' position '$pos";
}

$ANSWER = $pos;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Conditions, booleans, if, else and else if
 *
 *
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Store the boolean result of the test: `346 is less than 218` in a variable.
 * Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$a = 346;
$b = 218;
$booltest = ($a < $b);

$ANSWER = (boolean)$booltest;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Answer with the boolean value of: `189 is larger than 70`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$c = 189;
$d = 70;
$booltest2 = ($c > $d);
echo ($c > $d); // ger ". ($booltest2 ? "true" : "false");

$ANSWER = (boolean)$booltest2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Sum up the numbers: 8, 7, 5, 6 and 10. Save the result in a variable called
 * `totalSum`.
 *
 * Create an if/elseif-statement to see if `totalSum` is higher, lower or
 * equal to 35.
 *
 * Answer with the corresponding result as a string: `"higher"`, `"lower"`,
 * `"equal"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

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

$ANSWER = "higher";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/**
 * Exercise 2.4 (1 points)
 *
 * Create an if-statement that checks if a value is between (or equal to) 27
 * and  37. Use the variable `totalSum` from last exercise to test the
 * if-statement. Answer with a boolean `true` if the value is between the
 * values, otherwise respond with `false`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$bool_V = true;
$totalsum = 8 + 7 + 5 + 6 + 10;
echo "totalsum= " . $totalsum . "  ";
if ($totalsum < 37 && $totalsum > 27) {
        $bool_V = true;
} else {
            $bool_V = false;
}
echo $bool_V;


$ANSWER = (boolean)$bool_V;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Iteration and loops
 *
 * For-loops and while-loops.
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Create a while-loop that adds 9 to the number 20, 69 times. Use variables
 * to store the numbers. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
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

$ANSWER = 641;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Create a while-loop that subtracts 6.46 from the number 908 until the
 * number is between (not equal to) 30 and 40. Answer with the final result as
 * a float, rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$nrStart = 908;
$nrSubstr = 6.46;
$nrRakn = 1;
echo "startar med värde '$nrStart' .<br>";
while ($nrStart > 30
  && $nrStart > 40 ) {
    $nrStart = ($nrStart - $nrSubstr);
    // echo "värde '$nrStart' efter  '$nrRakn' varv.  <br>";
    $nrRakn ++;
}
echo "Resultat " . round($nrStart, 2) . ". <br>";


$ANSWER = 35.9;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Create a for-loop that iterates from 0 to (including) 13. Add the integer
 * value for each iteration to a string and separate each item with a `,`
 * (comma). Answer with the final string without an ending `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

for ($i = 0; $i <= 13; $i++) {
    if ($i < 13) {
        echo "$i,";
    } else {
        echo "$i \n";
    }
}

$ANSWER = "0,1,2,3,4,5,6,7,8,9,10,11,12,13";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 4.1 (3 points)
 *
 * Create a for-loop that goes through (and including) the numbers 30 to 40.
 * If the current number is even, you should multiply it with PI and add it to
 * a variable `res`. If the current number is odd, you should subtract the
 * square root of it, from the variable `res`. If the current number ends with
 * a zero, then ignore it. Answer with the final result of `res` and round it
 * to the nearest higher integer value.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$resultat = 0;
for ($i = 30; $i <= 40; $i++) {
    if ($i%10 ==0) {
         //echo "nolla <br>";
    } else {
        if ($i%2 ==0) {
                    $pii = pi();
                    $y = $pii *$i;
                    $resultat = $resultat + $y;
                    // echo "jämn '$i', pi*   = '$y'resultat '$resultat' <br>";
        } else {
                    $sqr = sqrt($i);
                    $resultat = $resultat - $sqr;
                    // echo "udda '$i', roten= '$sqr'  resultat '$resultat'<br>";
        }
    }
}
$res = ceil($resultat);
echo "resultat '$resultat', avrundat till '$res'";


$ANSWER = 411;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
