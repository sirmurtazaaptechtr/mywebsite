<?php
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating.<br>";
    }

    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo $this->name . " says Woof!<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo $this->name . " says Meow!<br>";
    }
}

$dog = new Dog("Buddy");
$dog->eat();
$dog->makeSound();

$cat = new Cat("Whiskers");
$cat->eat();
$cat->makeSound();

?>