<?php
// Computes the intersection of the arrays
$array1 = ['a' => 'green', 'red', 'blue'];
$array2 = ['b' => 'green', 'yellow', 'red'];
$result = array_intersect($array1, $array2);

print_r( $result );

// Clear preservation of this function
$array1 = [2, 4, 6, 8, 10, 12];
$array2 = [1, 2, 3, 4, 5, 6];
$result1 = array_intersect($array1, $array2);
$result2 = array_intersect($array2, $array1);

print_r( $result1 );
print_r( $result2 );

// Here is a array_union
/*
$union = array_merge(
	array_intersect($a, $b),
	array_diff($a, $b),
	array_diff($b, $a)
);
*/

// If you need to supply arbitrary number of arguments to array_intersect() or other array function, use the ff function
$full = call_user_func_array('array_intersect', [$array1, $array2]);

print_r($full);