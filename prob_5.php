<!-- 📝 Problem: Word Counter

Write a PHP program that:

Accepts an array of sentences (strings).

Counts the total number of words across all sentences.

Finds the longest word among them.

Displays each sentence with its individual word count.

💡 Example Input
$sentences = [
    "PHP is fun",
    "I am learning programming",
    "Practice makes perfect"
];

✅ Expected Output
Sentence: PHP is fun | Word Count: 3
Sentence: I am learning programming | Word Count: 4
Sentence: Practice makes perfect | Word Count: 3

Total Words: 10
Longest Word: programming -->

<?php
$sentences = [
    "PHP is fun",
    "I am learning programming",
    "Practice makes perfect"
];

$totalWords = 0;
$longestWord = "";

forEach($sentences as $sentence){
    $parts = explode(" ", $sentence);
    $count = count($parts);
    $totalWords += $count;
    echo "Sentence: {$sentence} | Word Count: {$count} \n";
    
    forEach($parts as $word){
       if (strlen($word) > strlen($longestWord)){
           $longestWord = $word;
       } 
    }
}

echo "Total Words: {$totalWords} \n";
echo "Longest Word: {$longestWord}\n";
?>