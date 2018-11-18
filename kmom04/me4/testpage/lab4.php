<h3>Lab 4</h3>
<?php
   error_reporting(-1);              // Report all type of errors
   ini_set("display_errors", 1);     // Display all errors
?>
<?php
echo "1.1 take 2 numbers as arguments and return the sum of them
Answer with a call to the function using the numbers 613 and 469<br>";
function sumNumbers($arg1, $arg2)
{
    $summa = $arg1 + $arg2;
    return $summa;
}
echo sumNumbers(613, 469);

echo "<br><br>1.2 take an array as argument and return the sum of all items in the array
Answer with a call to the function using the array: [4,256,5,13,1].<br>";
function sumArray($inp)
{
    $sum = $inp[0] + $inp[1] + $inp[2] + $inp[3] + $inp[4];
    return $sum;
}
echo sumArray([4,256,5,13,1]);

echo "<br><br>1.3 take 2 arguments, an array and a string.
Replace the first item in the array with the string and return the array
Answer with a call to the function using the arguments: [3,652,9,74,7] and -onion-.<br><br>";
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
print_r(modArray(array(3,652,9,74,7), "onion"));
modArray(array(3,652,9,74,7), "onion");

echo "<br><br>1.4 printRange take 2 numbers as arguments, start and stop.
The function should add all even numbers between start and stop (not including) to an array and return it.
Answer with a call to the function using the arguments: 8 and 35.<br>";
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
    var_dump($nyArray);
    return $nyArray;
}
printRange(8, 35);

echo "<br><br>1.5 combineArrays() takestwo arrays as arguments.
The function should combine the arrays to one (http://php.net/manual/en/function.array-combine.php) associative array and return it.
The first argument is the key and the second argument is the value.
Answer with a call to the function using the arguments:
[green,brown,pink,white,gray,blue] and [frog,bear,pig,lion,wolf,whale].<br><br>";

function combineArray($key, $val)
{
    $nyA = array_combine($key, $val);
    // echo "i funktionen";
    return $nyA;
}

$k = array("green", "brown", "pink", "white", "gray", "blue");
// print_r($k);
$v = array("frog", "bear", "pig", "lion", "wolf", "whale");
// echo "<br>";print_r($v);
//$svar = array_combine($k, $v);
$nyA = combineArray($k, $v);
print_r($nyA);
echo "<br>" ;

echo "<br><br>1.6 takes one argument, the euro amount to convert to dollars. Count 1 Euro as 1.261215 dollars.
Return the dollar amount of 923 Euros. Answer with the result as a double with 4 decimals.<br>";
function euroToDollar($euro)
{
    $dollar = $euro * 1.261215;
    return $dollar;
}
$d = (round(euroToDollar(923), 4));
echo "svar " . $d;

echo "<br><br>1.7 takes one argument. The function should return true if the argument is higher than 50 and lower than 100.
If the number is out of range, the function should return false. The return type should be boolean.
Use the argument 108 and answer with a call to the function.
<br>";
function inRange($arg)
{
    if (($arg > 50) and ($arg < 100)) {
        $svar = true;
    } else {
            $svar = false;
    }
    return(boolean) $svar;
}
$svar = inRange(108);
//echo (int)$svar;
//echo "<br>true " .(int)true . "<br";
//echo "false " .(int)false . "<br>";

echo "<br><br>1.8 takes one argument, the diameter of a circle.
The function should return the area of the circle, with 4 decimals.
Answer with the result if the diameter is 19. ( hint: pi() )<br>";
function calculateArea($diam)
{
    $pii = pi();
    $radie = $diam/2;
    echo "radie = " . $radie . "<br>";
    $radieKvad = $radie*$radie;
    echo "radieKvadrat = " . $radieKvad . "<br>";
    $yta = round($pii *  $radieKvad, 4);
    echo "yta = " . $yta . "<br>";
    // echo "<br>yta= ".$yta."<br>";
    return $yta;
}

$svar=calculateArea(19);  // 28.3528 736.9
echo $svar;

echo "<br><br>1.9 use the Fibbonacci Sequence, starting with 1 and 2.
Return the sum of all odd numbers in the sequence, when the sequence value dont exceed 1.000.000.<br>";

function fibonacci($start, $add, $arg3)
{
    /* https://stackoverflow.com/questions/15600041/php-fibonacci-sequence
       $fib = [1,0];
       for ($i=0; $i<30; $i++) {
           $next = array_sum($fib);
           array_shift($fib);
           array_push($fib,$next);
           echo $next.", ";
       }
    */
    $fibonaci = [$start,$add];
    //$fibonaci = [$add, $start];
    $sum= 0;
    $next = 0;
    echo "max värdet är " . $arg3 ."<br>";
    for ($i=0; $next<=$arg3; $i++) {
        // echo "i = " .$i . "<br>";
        $next = array_sum($fibonaci);
        if ($next <= $arg3) {
            if ($next % 2 == 0) {
                //echo "<br> " . $i . " - Even,  <br>";
                //array_push($nyArray, $i);
            } else {
                //echo "<br> aktuellt värde " . $next . " - Odd - ";
                $sum += $next;
                // echo  ", summan tom " . $next . " är " .$sum ." - Odd,  <br>";
            }
            array_shift($fibonaci);
            array_push($fibonaci, $next);
            //echo "<br> sista värdet" . $next.", ";
            $sistavarde = $next;
        }
    }
    $sum += $start;
    //echo "stoppad <br>";
    echo "<br>svaret " . $sum . " sista värdet " .$sistavarde . "<br>";
    return $sum; // 1089152
    // $svar = fibonacci(1, 2, 1000000);
    //echo "slut " . fibonacci(1, 2, 1000000); // 1089152
}
$svar = fibonacci(1, 2, 1000000);
echo "slut " . fibonacci(1, 2, 1000000); // 1089153
//$ANSWER = $svar;

echo "<br><br>2.1<br>
In this exercises you should use the former functions sumArray() and calculateArea().
<br>1) Create a new function called calculateMany() that takes an array with numbers as argument.
<br>2) For every number in the array, call calculateArea() and store the result in a new array.
<br>3) The last position in your new array should hold the result of a call to the function calculateArea()
where you pass the sum of the whole array, you passed as argument.
<br>4) All numbers in the resulting array should be rounded up to nearest integer.
<br>5) Answer with a call to calculateMany() with the array 34, 43, 41, 41, 31. <br>";

/*
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
*/

function calculateMany($arrayen)
{
    $totNr = 0;
    // hur många värden
    $totNr = count($arrayen);
    $nrSista = $totNr-1;
    $area = 0;
    //$areaFloat =0;
    echo "antal värden i arrayen: " . $totNr . "<br>";
    echo "sista cellen i arrayen är: " . $nrSista . "<br><br>";

    $nyArray =[];
    $totSum = 0;
    //$totSumFloat = 0;
    for ($i=0; $i <= $nrSista; $i++) {
        // echo "i = ". $i . ", värde = " . $arrayen[$i] ."<br>";
        //$areaFloat = calculateArea($arrayen[$i]);
        //echo "area utan ceil " . $areaFloat . " för i= " . $i . "<br>";

        // hämta nästa värde och anropa calculateArea
        $area = ceil(calculateArea($arrayen[$i]));

        //echo "area " . $area . " för i= " . $i . "<br>";
        //$totSumFloat += $areaFloat;
        //echo "<br>totsum float " . $totSumFloat ."<br>";
        echo "<br>diametern ". $arrayen[$i] . " har arean = ". $area . ",  lagras i nr = " . $i ."<br>";

        // lagra uppår avrundat värde, integer, i en ny array
        array_push($nyArray, (int)$area);
    }

    //$i = $totSum;
    //echo "<br>". $totSum ." före summering mha annan funktion <br>";

    // beräkna totala Arean med uppåt avrunat integer
    $totSum = ceil(sumArray($arrayen));
    echo "det sammalagda värdet för invärden är " . $totSum . "<br>";

    //echo "<br>" .$totSum ." efter summering mha annan funktion <br>";
    //array_push($nyArray,)
    //echo "<br>sa allaAreor = " . $allaAreor ."<br>";
    //$allaAreor = (calculateArea(cecil($nyArray[$totSum])));
    //echo "<br> spara summan " . $totSum . " i den sista cellen (i) " .$i ." <br>";
    // echo "<br>totalvärdet för alla celler = ". $totSum . " lagras i nr = " . $nrSista ."<br>";
    //array_push($nyArray, (intval($totSumFloat)));

    // beräkna sista värdet, avrundat uppåt, för totala värdet på inparametrar
    $sistaV = ceil(calculateArea($totSum));

    echo "<br>samman av inarrayen är " . $totSum . " är " . $sistaV ."<br><br>";
    // echo "<br>samman av inarrayen är " . $totSum . "<br><br>";

    // lagra den sista ytan som int i arrayen
    array_push($nyArray, (intval(($sistaV))));

    var_dump($nyArray);  //28353
    //echo "<br> summa ". $totSum ."<br>";

    // returnera arrayen som funktionen skapat
    return $nyArray;
}
$arrayen = array(34, 43, 41, 41, 31);
$svar = calculateMany(array(34, 43, 41, 41, 31));

// var_dump($svar); //28353
