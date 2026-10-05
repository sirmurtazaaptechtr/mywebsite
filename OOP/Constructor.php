<?php
class Employee {
    // Properties 
    public $name;
    public $age;
    public $gender;

    // Methods
    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function displayInfo() {
        echo "<hr>";
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Gender: " . $this->gender . "<br>";
    }

    public function __destruct() {
        echo "<hr>";
        echo "Destructor called for " . $this->name . "<br>";
    }
}

class FullTimeEmployee extends Employee {
    public $monthly_salary;

    public function __construct($name, $age, $gender, $monthly_salary) {
        parent::__construct($name, $age, $gender);
        $this->monthly_salary = $monthly_salary;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Monthly Salary: $" . $this->monthly_salary . "<br>";
    }
}

class PartTimeEmployee extends Employee {
    public $hourly_rate;

    public function __construct($name, $age, $gender, $hourly_rate) {
        parent::__construct($name, $age, $gender);
        $this->hourly_rate = $hourly_rate;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Hourly Rate: $" . $this->hourly_rate . "<br>";
        echo "Monthly Salary: $" . ($this->hourly_rate * 160) . "<br>"; // Assuming 160 working hours in a month
    }
}

$fte1 = new FullTimeEmployee("Anas", 20, "Male", 5000);
$fte1->displayInfo();

$pte1 = new PartTimeEmployee("Aidan", 18, "Male", 20);
$pte1->displayInfo();

$e1 = new Employee("Anas", 20, "Male");
$e1->displayInfo();

$e2 = new Employee("Aidan", 18, "Male");
$e2->displayInfo();

$e3 = new Employee("Owais", 17, "Male");
$e3->displayInfo();
?>