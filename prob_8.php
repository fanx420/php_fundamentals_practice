<!-- 🔹 Problem: Palindrome Checker for an Array of Strings

You are given an array of words. Write a PHP program that:

Checks each word to see if it is a palindrome (reads the same forwards and backwards).

Returns an array of all palindromes found.

Example Input:
$words = ["level", "world", "deed", "hello", "noon"];

Expected Output:
Array
(
    [0] => level
    [1] => deed
    [2] => noon
)
-->

<?php
$words = ["level", "world", "deed", "hello", "noon"];

$palindrome = [];

function isPalindrome($str){
   return strrev($str) === $str;
}
foreach($words as $word){
 if(isPalindrome($word)){
     $palindrome[] = $word;
 }
};

print_r($palindrome);
?>
