<?php
function pv ($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";    
}

echo PHP_INT_SIZE . "<br>";
echo PHP_INT_MAX . "<br>";
echo PHP_INT_MIN . "<br>";

echo PHP_FLOAT_MAX . "<br>";
echo PHP_FLOAT_MIN . "<br>";
echo PHP_FLOAT_DIG . "<br>";
echo PHP_FLOAT_EPSILON . "<br>";

$number = 15;

pv(is_float($number));
pv(is_int($number));

$number = 1.9e310;
echo ($number) . "<br>";

pv(is_infinite($number));

$number = acos(8);
echo $number . "<br>";

$number = "Two";
// $number = 2;

pv(is_numeric($number));

$number = 22.7;

echo intval($number) . "<br>";

$number = (int)3.14;
pv($number);

$number = (string)3.14;
pv($number);

pv((float)$number);

echo pi() . "<br>";

echo min(47, 36, 49, 40, 28) . "<br>";
echo max(47, 36, 49, 40, 28) . "<br>";

echo(abs(-6.7)) . "<br>";

echo(sqrt(64)) . "<br>";

echo(round(3.60)) . "<br>";
echo(round(0.49)) . "<br>";
echo(round(0.79)) . "<br>";

echo(rand()) . "<br>";
echo(rand(0,9)) . "<br>";

define("COMPANY_NAME","Aptech Learning");
const COMPANY_ADDRESS = "435/C/2 PECHS Block 2 Commercial Karachi.";

echo COMPANY_NAME . "<br>";
echo COMPANY_ADDRESS . "<br>";

echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

echo __LINE__ . "<br>";


