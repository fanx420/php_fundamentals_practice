<!-- 🥦 Grocery List Problem

You’re given a shopping list with some repeated items:

$groceries = ["Milk", "Eggs", "Bread", "Milk", "Eggs", "Butter", "Cheese", "Milk"];


Task 1:
Build an array where each unique grocery item gets assigned a unique number in the order it first appears.

Expected result:

Array
(
    [Milk] => 1
    [Eggs] => 2
    [Bread] => 3
    [Butter] => 4
    [Cheese] => 5
)


Task 2:
Build another array where the keys are grocery names and the values are how many times each item appears.

Expected result:

Array
(
    [Milk] => 3
    [Eggs] => 2
    [Bread] => 1
    [Butter] => 1
    [Cheese] => 1
) -->

<?php
$groceries = ["Milk", "Eggs", "Bread", "Milk", "Eggs", "Butter", "Cheese", "Milk"];

$grocId = [];
$id = 1;
$freq = [];

foreach($groceries as $grocery){
    if(!isset($grocId[$grocery])){
        $grocId[$grocery] = $id;
        $id++;
    }
    
    if(!isset($freq[$grocery])){
        $freq[$grocery] = 1;
    }else{
        $freq[$grocery]++;
    }
}

print_r($freq);
print_r($grocId);

?>