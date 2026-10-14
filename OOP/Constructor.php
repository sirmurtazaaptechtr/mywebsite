<?php
class Employee {
    // Class Constant
    const COMPANY_NAME = "Tech Solutions Inc.";
    const COMPANY_ADDRESS = "123 Tech Street, Silicon Valley, CA";
    const COMPANY_PHONE = "(123) 456-7890";

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
        echo "Company: " . self::COMPANY_NAME . "<br>";
        echo "Address: " . self::COMPANY_ADDRESS . "<br>";
        echo "Phone: " . self::COMPANY_PHONE . "<br>";
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

echo "Company: " . Employee::COMPANY_NAME . "<br>";
echo "Address: " . PartTimeEmployee::COMPANY_ADDRESS . "<br>";
echo "Phone: " . FullTimeEmployee::COMPANY_PHONE . "<br>";

echo "<hr>";

$e1 = new Employee("Anas", 20, "Male");
$e1->displayInfo();

$e2 = new Employee("Aidan", 18, "Male");
$e2->displayInfo();

$e3 = new Employee("Owais", 17, "Male");
$e3->displayInfo();

$fte1 = new FullTimeEmployee("John", 20, "Male", 5000);
$fte1->displayInfo();

$pte1 = new PartTimeEmployee("Jane", 18, "Female", 25);
$pte1->displayInfo();


?>