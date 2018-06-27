<?php
$arr = [2, 4, 6, 8];
echo "sum(a) = " . array_sum($arr) . "\n";

$barr = ["a" => 1.2, "b" => 2.3, "c" => 3.4];
echo "sum(b) = " . array_sum($barr) / count($barr) . "\n"; // get the average

var_dump( array_sum(str_split('17243')) );