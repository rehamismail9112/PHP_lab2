<?php
$ages = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);

// Sort by ascending order of values
asort($ages);
echo "Sorted by value in ascending order:<br>";

foreach ($ages as $key => $value) {
    echo "$key: $value<br>";
}
echo "<br>";

// Sort by ascending order of keys
ksort($ages);
echo "Sorted by key in ascending order:<br>";
foreach ($ages as $key => $value) {
    echo "$key: $value<br>";
}
echo "<br>";

// Sort by descending order of values
arsort($ages);
echo "Sorted by value in descending order:<br>";
foreach ($ages as $key => $value) {
    echo "$key: $value<br>";
}
echo "<br>";

// Sort by descending order of keys
krsort($ages);
echo "Sorted by key in descending order:<br>";
foreach ($ages as $key => $value) {
    echo "$key: $value<br>";
}
?>