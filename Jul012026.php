<?php 
// strict requirement
declare(strict_types=1);

// PHP Functions
function my_fun () {
    echo "<p>I Love Php!</p>";
}

function show_info (string $name, float $age, string $gender = 'male') {
    echo "<p>Dear $name, you are $age years old $gender.</p>";
}

function squrer (float $number) {
    $square = $number * $number;
    return $square;
}

function total_value (float $num1, float $num2, float ...$nums) : float {
    $sum = $num1 + $num2;
    foreach($nums as $num) {
        $sum += $num;
    }
    return $sum;
}

my_fun();
my_fun();

show_info("Hamza",16);
show_info("Anas",20);
show_info("Aidan",18);
show_info("Ali Raza", 17);
show_info("Sara", 37, "female");

echo squrer(12) . "<br>";
echo squrer(8) . "<br>";

$num = 3;
$sq = squrer($num);
echo "<p>The square of $num is $sq </p>";

echo "<p> The square of 3 is " . squrer(3) . "</p>";

echo total_value(1, 2, 3, 4, 5, 6, 7, 8, 9) . "<br>";
echo total_value(1, 6) . "<br>";
echo total_value(1, 6, 8) . "<br>";