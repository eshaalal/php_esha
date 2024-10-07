<?php
class Student {
    private $rollNumber;
    private $registrationNumber;

    public function __construct($rollNumber, $registrationNumber) {
        $this->rollNumber = $rollNumber;
        $this->registrationNumber = $registrationNumber;
    }

    public function getRollNumber() {
        return $this->rollNumber;
    }

    public function getRegistrationNumber() {
        return $this->registrationNumber;
    }

    public function takeExam($subject) {
        echo "Student with roll number {$this->rollNumber} is taking the {$subject} exam.<br>";
    }
}

$student1 = new Student('2021001', 'REG12345');

echo "Roll Number: " . $student1->getRollNumber() . "<br>";
echo "Registration Number: " . $student1->getRegistrationNumber() . "<br>";

$student1->takeExam('Mathematics');
$student1->takeExam('History');
?>
