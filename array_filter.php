<?php
// array_filter - filters elements of an array using a callback function
$arr 			= ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => NULL, 'f' => false];

$arr_second 	= ['element1' => 1, 'element2' => 2, 'element3' => 3, 'element4' => 4];

$filterOutKeys 	= ['element1', 'element4'];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}));

dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}));

dump(array_filter($arr, 'strlen'));

dump(array_diff_key($arr_second, array_flip($filterOutKeys)));

function dump($param) {
	var_dump($param);
	exit;
}
