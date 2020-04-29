<?php
//500 Element Array
$random_number_array = range(1, 500);
shuffle($random_number_array );
$shuffle_array = $random_number_array;
//Randomly remove and discard an arbitary element
$randomKey = array_rand($random_number_array, 1);
unset($random_number_array[$randomKey]);
print_r($random_number_array);
//value of the missing iteam
$missing = array_diff($shuffle_array,$random_number_array); 
echo "Missing Array";
print_r($missing);
?>





