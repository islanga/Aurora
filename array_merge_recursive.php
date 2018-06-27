<?php
// array_merge_recursive - Merge two or more arrays recursively
$ar1 = ['color' => ['favorite' => 'red'], 5];
$ar2 = [10, 'color' => ['favorite' => 'green', 'blue']];

$result = array_merge_recursive($ar1, $ar2);

print_r($result);

/*
Array
(
    [color] => Array
        (
            [favorite] => Array
                (
                    [0] => red
                    [1] => green
                )

            [0] => blue
        )

    [0] => 5
    [1] => 10
)
*/