<?php
// array_splice - Remove a portion of the array and replace it with something else
$input = ['red', 'green', 'blue', 'yellow'];
array_splice($input, 2);

array_walk($input, function($value) {
	echo $value . "\n";
});

$input = ['red', 'green', 'blue', 'yellow'];
array_splice($input, 1, -1);

echo "\n";
echo "\n";

array_filter($input, function($value) {
	echo $value . "\n";
});

$input = ['red', 'green', 'blue', 'yellow'];
array_splice($input, 1, count($input), "orange");

echo "\n";
echo "\n";

array_map(function($value) {
	echo $value . "\n";
}, $input);

$input = ['red', 'green', 'blue', 'yellow'];
array_splice($input, -1, 1, ['black', 'maroon']);

echo "\n";
echo "\n";

$result = array_reduce($input, function($value) {
	return $value . "\n";
});
echo $result;