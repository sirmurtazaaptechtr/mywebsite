<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
// PHP Associative Arrays
$names = array(
    "Anas", 
    "Aidan",
    "Rayyan",
    "Hamza"
    );
pr($names);

$student = array(
    "name" => "Aarish Ahmed", 
    "dob" => "04-Jun-2006", 
    "gender" => "male"
    );

pr($student);

// Access Array Item
echo "<p>" . $student["dob"] . "</p>";

// Change Value of Array Item
$student["name"] = "Aarish Ahmed Khan";
pr($student);

// Loop Through an Associative Array
foreach($student as $key => $value) {
    echo "<p><b>" . strtoupper($key) . " : </b>$value</p>";
}

// Remove Item From an Associative Array
unset($student["dob"]);
pr($student);

// Add Item From an Associative Array
$student += [
    "phone" => "0333-2223321",
    "birthday" => "04-Jun-2006",
    "email" => "aarishahmedkhan07@gmail.com" 
    ];
pr($student);

// PHP Sorting Arrays
asort($student);
pr($student);

arsort($student);
pr($student);

ksort($student);
pr($student);

krsort($student);
pr($student);

$students = [
    [
        "id" => "Student1713223",
        "name" => "Aarish Ahmed",
        "dob" => "04-Jun-2006",
        "phone" => "0333-2223321",
        "email" => "aarishahmedkhan07@gmail.com", 
        "gender" => "male"
    ],
    [
        "id" => "Student1686823",
        "name" => "Hamza Ali",
        "dob" => "20-Nov-2010",
        "phone" => "0337-2522407",
        "email" => "ha7035109@gmail.com", 
        "gender" => "male"
    ],
    [
        "id" => "Student1706427",
        "name" => "Rayyan Khalid",
        "dob" => "30-Jun-2008",
        "phone" => "0319-3528969",
        "email" => "rayyankhalid1212@gmail.com", 
        "gender" => "male"        
    ],
    [
        "id" => "Student1717781",
        "name" => "Aidan Clements",
        "dob" => "23-Jul-2008",
        "phone" => "0336-1230689",
        "email" => "aidanisblue247@gmail.com",
        "gender" => "male"
    ]
];
pr($students);

foreach($students as $st) {
    foreach($st as $key => $value) {
        echo "<p><b>" . strtoupper($key) . " : </b>$value</p>";
    }
    echo "<br>";
}