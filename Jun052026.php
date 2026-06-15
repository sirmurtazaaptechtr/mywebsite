<?php 
$name = "Ali Raza";

function displayName() {
    global $name;
    $age = 16;    
    echo "<p>The name is: " . $name . " and you are " . $age . " years old.</p>" ;    
    return $age;
}

function counter () {
    static $cnt = 1;
    echo "<p>$cnt</p>";
    $cnt++;
}

$age = displayName(); 
echo "<p>The name is: " . $name . " and you are " . $age . " years old.</p>" ;    

counter();
counter();
counter();
counter();

$age = 18;


echo $name, $age . "<br />";

print $name . "<br />";

print "My name is  " . $name . " and I am " . $age . " years old.<br />";
?>