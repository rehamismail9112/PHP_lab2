<?php
$numbers = array(12, 45, 10, 25);
$sum = array_sum($numbers);
$avg = $sum / count($numbers);

echo "Sum: " . $sum . "<br>";
echo "Avg: " . $avg . "<br>";

// add value = 45 in index =1
$numbers[1] = 45;

// sort in reverse order
rsort($numbers);

echo "Sorted in reverse order: ";
print_r($numbers);
?>