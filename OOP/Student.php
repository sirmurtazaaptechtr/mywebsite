<?php

class Student {
    // Properties
    public $name;
    public $age;
    public $gender;

    // Methods
    public function show_info() {
        echo "<b>Name: </b>" . $this->name . "<br>";
        echo "<b>Age: </b>" . $this->age . "<br>";
        echo "<b>Gender: </b>" . $this->gender . "<br>";
        echo "<br><hr>";
    }   
}

$s1 = new Student();
$s2 = new Student();
$s3 = new Student();

$s1->name = "Owais Yameen";
$s1->age = 17;
$s1->gender = "Male";

$s2->name = "Barina Saleem";
$s2->age = 20;
$s2->gender = "Female";

$s3->name = "Syed Murtaza Hussain";
$s3->age = 43;
$s3->gender = "Male";

$s1->show_info();
$s2->show_info();
$s3->show_info();