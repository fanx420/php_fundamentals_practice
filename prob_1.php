<!-- Write a PHP program that:

Creates an array of 5 numbers.

Loops through the array and prints each number.

Prints the sum of all the numbers at the end.

Sample Data:
$numbers = [5, 10, 15, 20, 25];

Expected Output:
Number: 5
Number: 10
Number: 15
Number: 20
Number: 25
Sum = 75 -->

<?php
$numbers = [5, 10, 15, 20, 25];

forEach($numbers as $number){
    echo("Number: $number" . "\n");
}

$sum = array_reduce($numbers, fn($acc, $number) => $acc + $number, 0);
echo("Total: ". $sum);
?>
