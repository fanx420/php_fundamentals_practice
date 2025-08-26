<!-- 📌 Problem: FizzBuzz Variant

Scenario:
You are asked to write a program that prints numbers from 1 to 50 with the following rules:

If the number is divisible by 3, print "Fizz".

If the number is divisible by 5, print "Buzz".

If the number is divisible by both 3 and 5, print "FizzBuzz".

Otherwise, print the number itself.

Bonus (for interview edge cases):

Return the output as an array instead of just printing.

Example Output:
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
...
50 -->

<!-- Using for loop and echo -->
<?php
$range = 50;

for ($i = 1; $i < $range; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "fizzbuzz \n";
    } else if ($i % 5 === 0) {
        echo "buzz \n";
    } else if ($i % 3 === 0) {
        echo "fizz\n";
    } else {
        echo $i . PHP_EOL;
    }
}
?>

<!-- Using forEach loop and returning as an array -->
<?php
$rangeArr = range(1, 50);

foreach ($rangeArr as $index => $num) {
    if ($num % 3 === 0 && $num % 5 === 0) {
        $rangeArr[$index] = "fizbuzz";
    } else if ($num % 5 === 0) {
        $rangeArr[$index] = "buzz";
    } else if ($num % 3 === 0) {
        $rangeArr[$index] = "fizz";
    }
}
print_r($rangeArr);
?>

<!-- Using array_map() and returning as an array -->
<?php
$rangeArr = range(1, 50);

$newArr = array_map(function ($num) {
    if ($num % 3 === 0 && $num % 5 === 0) {
        return "fizbuzz";
    } else if ($num % 5 === 0) {
        return "buzz";
    } else if ($num % 3 === 0) {
        return "fizz";
    }
    return $num;
}, $rangeArr);
print_r($newArr);   
?>