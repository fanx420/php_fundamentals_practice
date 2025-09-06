<!-- Problem: Anagram Checker

Write a PHP program that checks if two given strings are anagrams of each other.

📌 An anagram means both strings contain the same characters in any order.

"listen" and "silent" → ✅ anagram

"hello" and "world" → ❌ not an anagram -->

<?php
function anagramChecker($str1, $str2){
    $str1 = strtolower(str_replace("","", $str1));
    $str2 = strtolower(str_replace("","", $str2));
    $letters1 = str_split($str1);
    $letters2 = str_split($str2);
    
    sort($letters1);
    sort($letters2);
    
    if($letters1 === $letters2){
        echo "{$str1} and {$str2} anagram";
    }else{
           echo "{$str1} and {$str2} ARE NOT anagram";
    }
}

anagramChecker("listen","silent");
?>