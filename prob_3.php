<!-- 📝 Problem: Student Class with OOP

Create a Student class in PHP with the following:

Properties

name

score

Methods

__construct($name, $score) → sets the properties when creating a new object.

getStatus() → returns "Passed" if the score is ≥ 75, otherwise "Failed".

displayInfo() → prints:

Name: [name], Score: [score], Status: [Passed/Failed]


Task

Create at least 3 student objects using this class.

Store them in an array.

Loop through the array and call displayInfo() for each student.

🎯 Example Output (if done correctly)
Name: Kaleb, Score: 85, Status: Passed
Name: Francis, Score: 72, Status: Failed
Name: Dion, Score: 90, Status: Passed -->

<?php
class Student{
    public $name;
    public $score;
    public $status;
    
    public function __construct($name, $score,){
        $this->name = $name;
        $this->score = $score;
        $this->getStatus();
    }
    
    public function getStatus(){
     $this->status = $this->score >= 75 ? "Passed" : "Failed";
     return $this->status;
    }
    
    public function displayInfo(){
        echo("Name: {$this->name}, Score: {$this->score}, Status: {$this->status} \n");
    }
}

$student1 = new Student("Fanx", 88);
$student1->getStatus();
$student1->displayInfo();

$student2 = new Student("Jack", 58);
$student2->getStatus();
$student2->displayInfo();

$student3 = new Student("Guiseppie", 75);
$student3->getStatus();
$student3->displayInfo();
?>
