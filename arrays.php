<?php
$x = 10;
$x = "Ali";
$x = [10, "Ali"];
echo $x[0];
echo "<br>";
echo $x[1];
echo "<br>";

$x = ["age" => 10, "name" => "Ali"];
echo $x["age"];
echo "<br>";
echo $x["name"];
echo "<br>";

// Append Value
$x["gender"] = "male";
$x["email"] = "ali@email.com";

// 
unset($x["gender"]);
print_r($x);