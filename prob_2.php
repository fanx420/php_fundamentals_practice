<!-- Write a PHP program that:

Stores 5 student names and their scores in an associative array.

Loops through the array and prints each student’s name + score.

Determines and prints:

The highest score

The average score

Sample Data:
$students = [
    "Kaleb" => 85,
    "Francis" => 72,
    "Dion" => 90,
    "Zosa" => 65,
    "Mark" => 78
];

Expected Output:
Kaleb scored 85
Francis scored 72
Dion scored 90
Zosa scored 65
Mark scored 78
Highest score: 90
Average score: 78 -->

<?php
$students = [
    "Kaleb" => 85,
    "Francis" => 72,
    "Dion" => 90,
    "Zosa" => 65,
    "Mark" => 78
];

$highest = array_reduce($students, fn($prev, $current) => $prev > $current ? $prev : $current, 0);

$sum = array_reduce($students, fn($acc, $score) =>($acc + $score), 0);
$avg = $sum / count($students);

forEach($students as $student => $score){
    echo("{$student} scored {$score} \n");
};
echo("Highest Score: {$highest}\nAverage Score: {$avg}")
?>
