<!-- 🚀 Problem: Find the Missing Number in a Sequence

You are given an array containing n distinct numbers taken from the range 1 to n+1. The task is to find the missing number.

Example:
$nums = [1, 2, 4, 5, 6];


✅ The missing number is 3.

🔹 Requirements

Solve this using a loop-based approach (don’t use built-in array_diff). -->


<?php
$nums = [1, 2, 4, 5, 6];

for ($i = 0 ; $i < count($nums) - 1; $i++){
  if ($nums[$i + 1] - $nums[$i] > 1){
      echo $nums[$i] + 1;
  }
}
?>