<?php
function cube($n)
{
	return ($n * $n * $n);
}

$temp_array = [1, 2, 3, 4, 5];
$result     = array_map("cube", $temp_array);

var_dump( $result );

$func = function($value) {
	return $value * 2;
};

