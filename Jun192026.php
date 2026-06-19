<?php
// PHP Operators
// Arithmetic operators

$num1 = 10;
$num2 = 5;
//Addition
$res = $num1 + $num2;
echo "<p>$num1 + $num2 = $res</p>";
//Subtraction
$res = $num1 - $num2;
echo "<p>$num1 - $num2 = $res</p>";
//Multiplication
$res = $num1 * $num2;
echo "<p>$num1 x $num2 = $res</p>";
//Division
$res = $num1 / $num2;
echo "<p>$num1 / $num2 = $res</p>";
//Exponentiation
$res = $num1 ** $num2;
echo "<p>$num1 ^ $num2 = $res</p>";
//Modulus
$res = $num1 % $num2;
echo "<p>$num1 % $num2 = $res</p>";

$num1++;
echo "<p>$num1</p>";

$res = $num1++;
echo "<p>$res</p>";
echo "<p>$num1</p>";

$res = ++$num1;
echo "<p>$res</p>";
echo "<p>$num1</p>";

$num1--;
echo "<p>$num1</p>";

$res = $num1--;
echo "<p>$res</p>";
echo "<p>$num1</p>";

$res = --$num1;
echo "<p>$res</p>";
echo "<p>$num1</p>";

// PHP Comparison Operators

$res = $num1 < $num2;
echo "<p>";
echo "$num1 < $num2 : ";
var_dump($res); 
echo "</p>";

$res = $num1 <= $num2;
echo "<p>";
echo "$num1 <= $num2 : ";
var_dump($res); 
echo "</p>";

$res = $num1 > $num2;
echo "<p>";
echo "$num1 > $num2 : ";
var_dump($res); 
echo "</p>";

$res = $num1 >= $num2;
echo "<p>";
echo "$num1 >= $num2 : ";
var_dump($res); 
echo "</p>";

$res = $num1 != $num2;
echo "<p>";
echo "$num1 != $num2 : ";
var_dump($res); 
echo "</p>";

$num2 = "10";

$res = $num1 == $num2;
echo "<p>";
echo "$num1 == $num2 : ";
var_dump($res); 
echo "</p>";

$res = $num1 === $num2;
echo "<p>";
echo "$num1 === $num2 : ";
var_dump($res); 
echo "</p>";

$res = $num1 !== $num2;
echo "<p>";
echo "$num1 !== $num2 : ";
var_dump($res); 
echo "</p>";

// Spaceship

$res = $num1 <=> $num2;
echo "<p>$num1 <=> $num2 = $res</p>";

$num2 = 5;

$res = $num1 <=> $num2;
echo "<p>$num1 <=> $num2 = $res</p>";

$num2 = 15;

$res = $num1 <=> $num2;
echo "<p>$num1 <=> $num2 = $res</p>";

//PHP Logical Operators

echo "<p> True AND True : ";
var_dump(True && True);
echo "</p>";

echo "<p> True AND False : ";
var_dump(True && False);
echo "</p>";

echo "<p> False AND True : ";
var_dump(False && True);
echo "</p>";

echo "<p> False AND False : ";
var_dump(False && False);
echo "</p>";

echo "<p> True OR True : ";
var_dump(True || True);
echo "</p>";

echo "<p> True OR False : ";
var_dump(True || False);
echo "</p>";

echo "<p> False OR True : ";
var_dump(False || True);
echo "</p>";

echo "<p> False OR False : ";
var_dump(False || False);
echo "</p>";

// PHP Conditional Operators
// Ternary

$num1 = 10;
$num2 = 15;

$res = $num1 > $num2 ? $num1 : $num2;

echo "<p>$res</p>";


$db_output = NULL;
$sys_input = $db_output ?? "No Name";
echo "<p>$sys_input</p>";