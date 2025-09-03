<!-- 🔹 Problem: Find the Second Largest Number

You are given an array of integers. Write a PHP program to find the second largest number in the array (without using built-ins like max() twice).

Example Input:
$numbers = [12, 45, 67, 23, 89, 45, 67];

Expected Output:
Second Largest: 67 -->

<?php
$numbers = [12, 45, 67, 23, 89, 45, 67];
$largestNumber = array_reduce($numbers, fn($carry , $number) => 
    $carry > $number ?  $carry :  $number
, 0);

foreach($numbers as $number){
    if($number < $largestNumber){
        $newNums[] = $number;
    }
}

$secondLargestNumber = array_reduce($newNums, fn($carry, $number) =>
    $carry > $number ? $carry : $number, 0);

echo "Second Largest:" . $secondLargestNumber;
?>

<!-- Other way -->

<?php
$numbers = [12, 45, 67, 23, 89, 45, 67];

$largest = PHP_INT_MIN;
$secondLargest = PHP_INT_MIN;

foreach ($numbers as $num) {
    if ($num > $largest) {
        $secondLargest = $largest;
        $largest = $num;
    } elseif ($num > $secondLargest && $num < $largest) {
        $secondLargest = $num;
    }
}

if ($secondLargest === PHP_INT_MIN) {
    echo "No second largest number exists.";
} else {
    echo "Second Largest: " . $secondLargest;
}
?>
