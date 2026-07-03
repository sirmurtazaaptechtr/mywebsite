<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
// PHP Arrays
// PHP Indexed Arrays
// $names = ["Anas", "Aidan","Rayyan","Hamza"];
$names = array("Anas", "Aidan","Rayyan","Hamza");

// echo "<pre>";
// print_r($names);
// echo "</pre>";

pr($names);

// echo "<p>Dear " . $names[0] . ", how do you do?";
// echo "<p>Dear " . $names[1] . ", how do you do?";
// echo "<p>Dear " . $names[2] . ", how do you do?";
// echo "<p>Dear " . $names[3] . ", how do you do?";

for($i = 0; $i < count($names); $i++ ) {
    echo "<p>Dear " . $names[$i] . ", how do you do?";
}

foreach($names as $name) {
    echo "<p>Dear $name, how do you do?";
}

// PHP Update Array Items
$names[0] = "Anas Khan"; 
$names[1] = "Aidan Melvin"; 
$names[2] = "Rayyan Khalid"; 
$names[3] = "Hamza Zubair";
pr($names);

// PHP Add Array Items
array_push($names,"Syed Murtaza Hussain");
pr($names);

array_unshift($names,"Ali Raza");
pr($names);

array_splice($names,2,0,"Barina Saleem");
pr($names);

// PHP Remove Array Items
array_pop($names);
pr($names);

array_shift($names);
pr($names);

array_splice($names,1,1);
pr($names);