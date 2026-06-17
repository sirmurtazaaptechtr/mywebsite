<?php
function pv ($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";    
}

$num1 = 5; // Integer
$num2 = 2.4; // Float
$num3 = "65.76"; //Numeric Strings
$num4 = "24"; //Numeric Strings

pv($num1);
pv($num2);
pv($num3);
pv($num4);

pv(is_int($num1));
pv(is_int($num2));
