<?php
$name = "Ali Raza";
$age = 17;

echo "<p>Dear $name you are $age years old.</p>";
echo '<p>Dear $name you are $age years old.</p>';

$len = strlen($name);

echo "<p>The length of '$name' is $len</p>";

$words = str_word_count($name);
echo "<p>'$name' has $words words in it.</p>";

$txt = "I really love PHP!";
$res = str_contains($txt, "love");
var_dump($res);
echo "<br>";

$res = strpos($txt,"love");
var_dump($res);
echo "<br>";

echo "<p>" . strpos("I really love PHP!", "love") . "</p>";

var_dump(str_starts_with($txt, "I really"));
echo "<br>";

var_dump(str_ends_with($txt, "PHP!"));
echo "<br>";

echo "<p>$txt</p>";

echo "<p>" . strtoupper($txt) . "</p>";
echo "<p>" . strtolower($txt) . "</p>";

$new_txt = str_replace("PHP","My Self",$txt);
echo "<p>$txt</p>";
echo "<p>$new_txt</p>";

$new_txt = strrev($txt);
echo "<p>$new_txt</p>";

$x = "    Hello World! ";

echo "<p>" . trim($x) . "</p>";

$names = "Anas Khan, Rayyan Khalid, Aarish, Aidan, Hamza, Owais, Barina, Anas";

echo $names;

$names_arr = explode(", ",$names);
echo "<pre>";
print_r($names_arr);
echo "</pre>";

$first_name = "Rayyan";
$last_name = "Khalid";

$full_name = $first_name . " " . $last_name;
echo "<p>$full_name</p>";

$sub_text = substr($txt,9,4);
echo "<p>$sub_text</p>";

$sub_text = substr($txt,9);
echo "<p>$sub_text</p>";

$sub_text = substr($txt,-9,4);
echo "<p>$sub_text</p>";

$message = "We are the so-called \"Vikings\" from the north.";
echo $message;