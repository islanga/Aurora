<?php
// extract - import variables into the current symbol table from an array
$size      = "large";
$var_array = [
	'color' => 'blue',
	'size'  => 'medium',
	'shape' => 'sphere'
];

extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size";
