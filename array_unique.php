<?php
// array_unique - Removed duplicate values from an array
$input  = ['a' => 'green', 'red', 'b' => 'green', 'blue', 'red'];

$result = array_unique($input);

pr($result);

$input  = [4, '4', '3', 4, 3, '3'];

$results = array_unique($input);

pr($results);

function pr($param) {
	var_dump($param);
}