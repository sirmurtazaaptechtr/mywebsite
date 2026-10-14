<?php 
interface IAnimal {   

    public function eat();
    public function sleep();
    public function makeSound();
    public function move();
}

class Dog implements IAnimal {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating.\n";
    }

    public function sleep() {
        echo $this->name . " is sleeping.\n";
    }

    public function makeSound() {
        echo $this->name . " says Woof!\n";
    }

    public function move() {
        echo $this->name . " is running.\n";
    }
}

class Cat implements IAnimal {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating.\n";
    }

    public function sleep() {
        echo $this->name . " is sleeping.\n";
    }

    public function makeSound() {
        echo $this->name . " says Meow!\n";
    }

    public function move() {
        echo $this->name . " is walking.\n";
    }
}

$c1 = new Cat("Whiskers");
$c1->eat();
$c1->sleep();
$c1->makeSound();
$c1->move();

$d1 = new Dog("Buddy"); 
$d1->eat();
$d1->sleep();
$d1->makeSound();   
$d1->move();