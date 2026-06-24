<?php
// PHP match Expression
$favcolor = "black";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }

$result = match($favcolor) {
    "red" => "<p>Your favorite color is red!</p>",
    "blue" => "<p>Your favorite color is blue!</p>",
    "green" => "<p>Your favorite color is green!</p>",
    "yellow" => "<p>Your favorite color is yellow!</p>",
    default => "<p>Your favorite color is neither red, blue, green nor yellow!</p>"
};
echo $result;

// PHP Loops
// while
$cnt = 1;
while($cnt <= 10) {
    echo "<p>$cnt</p>";
    $cnt++;
}
// do-while
$cnt = 1;
do {
    echo "<p>$cnt</p>";
    $cnt++;
}while($cnt <= 10);
// for
for($cnt = 1; $cnt <= 10; $cnt++) {
    echo "<p>$cnt</p>";
}
// example 1
$tab = 19;
for($cnt = 1; $cnt <= 10; $cnt ++) {
    $prod = $cnt * $tab;
    echo "<p>$tab X $cnt = $prod</p>";
}
// example 2
$names = ["Anas", "Hamza", "Owais", "Rayyan"];
// print_r() built-in function with pre tag
echo "<pre>";
print_r($names);
echo "</pre>";

// for loop
for($cnt = 0; $cnt < 4; $cnt ++) {
    echo "<p>" . $cnt + 1 . ". Dear $names[$cnt], how do you do?</p>";
}
// foreach loop
foreach($names as $index => $name){
    echo "<p>" . $index + 1 .  ". Dear $name, how do you do?</p>";
}

// continue
for($cnt = 1; $cnt <= 10; $cnt++) {
    if($cnt % 2 == 0) {
        continue;
    }
    echo "<p>$cnt</p>";
}

// break

$number = 25;
$is_prime = true;
for($dvr = 2; $dvr < $number; $dvr++) {
    // echo "<p>$number % $dvr : " . $number % $dvr . "</p>";
    if($number % $dvr == 0) {
        $is_prime = false;
        break;
    }
}
if($is_prime) {
    echo "<p>$number is PRIME</p>";
}else {
    echo "<p>$number is NOT-PRIME</p>";
}