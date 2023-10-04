<?php
/* 1.Create a class called 'Person' with the following attributes and methods: */
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.\n";
    }
}

// Example usage:
$person = new Person("John", 30);
$person->introduce();

/* 2. Create a child class called 'Student' that extends the 'Person' class. The 'Student' class should have an additional attribute called 'mark' (string) and an additional method called 'calculate_grade_percentage()' that returns the mark percentage (string). Assume that the mark is out of 100. */
class Student extends Person {
    private $mark;
    public $name;

    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
        $this->name = "Alice";
    }
    public function calculate_grade_percentage() {
        $percentage = ($this->mark / 100) * 100;
        return "{$percentage}%";
    }
    public function introduce() {
        echo "My name is {$this->name}, I am {$this->age} years old.\n";
    }

   

}

$student = new Student("Robert", 18, "85");

$student->introduce();

$gradePercentage = $student->calculate_grade_percentage();

echo "My grade percentage is {$gradePercentage}\n";



