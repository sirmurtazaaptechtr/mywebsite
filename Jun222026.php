<?php
$data = 10;

if($data > 10) {
    echo "Data is greater than 10";
}
elseif ($data == 10) {
    echo "Data is 10";
}
else {
    echo "Data is less than 10";
}

$obt_marks = 63;
$max_marks = 75;
$percentage = $obt_marks/$max_marks*100;

echo "<p>Percentage : " . number_format($percentage, 2) . "%</p>";
echo "<p>Percentage : " . round($percentage,2) . "%</p>";
echo "<p>Percentage : " . sprintf("%.2f", $percentage) . "%</p>";

if($percentage > 40) {
    echo "<p>Status : PASS</p>";
}else {        
    echo "<p>Status : FAIL</p>";
}

if($percentage >= 80) {
    echo "<p>Grade : A1</p>";
}elseif($percentage >= 70) {
    echo "<p>Grade : A</p>";
}elseif($percentage >= 60) {
    echo "<p>Grade : B</p>";
}elseif($percentage >= 50) {
    echo "<p>Grade : C</p>";
}elseif($percentage >= 40) {
    echo "<p>Grade : D</p>";
}else {
    echo "<p>Grade : N/A</p>";
}

$char = "R";

switch($char) {
    case "A":
    case "a":
    case "E":
    case "e":
    case "I":
    case "i":
    case "O":
    case "o":
    case "U":
    case "u":
        echo "<p>'$char' is Vowel</p>";
    break;
    case "Z":
    case "z":
        echo "<p>'$char' is the last Alphabet and it is Consonent</p>";
    break;
    default:
        echo "<p>'$char' is Consonent</p>";
    break;
}

$result = match($char) {
    "A", "a", "E", "e", "I", "i", "O", "o", "U", "u" =>"<p>'$char' is Vowel</p>",
    "Z", "z" => "<p>'$char' is the last Alphabet and it is Consonent</p>",
    default => "<p>'$char' is Consonent</p>"
};
echo $result;