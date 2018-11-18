<h2> Sidan saknas! </h2>;
<?php
$array = [
    "sverige" => "sthlm",
    "norge" => "oslo"
];
echo "<pre>";
print_r($array);
echo "</pre>";

/* $lander=["sverige", "norge", "Finland"];
array_push($lander, "Canada");
$lander[] = "Island";
//$lander[0] = "Island";
/*$sista = array_pop($lander);
unset($lander[1]);*/
/*echo "<pre>";
print_r($lander);
echo "</pre>";*/
//echo $sista;
/*count();
array_shift();
$delav = array_splice($lander, 1, 2);
array_values();
$landerSomString = implode(",", $lander);
$landerSomArray = explode(", ", $landerSomString);*/
/*
$capitals = ["Rey", "Sthlm", "Osla", "Khamn"];
$keyArray[$lander[0]] = $capitals[0];
$keyArray[$lander[1]] = $capitals[1];
$keyArray[$lander[2]] = $capitals[2];
$keyArray[$lander[3]] = $capitals[3];
$continent["europa"] = $keyArray;
$continent["USA"] = array_splice($keyArray, 3, 1);
echo "<pre>";
print_r($continent["europa"]["sverige"]);
foreach ($continent["europa"] as $key => $value) {
    echo "<br> " . $key . " = " . $value . "<br>";
}
echo "</pre>";*/
?>
