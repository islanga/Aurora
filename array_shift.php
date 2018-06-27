<?php
$stack = ["orange", "banana", "apple", "raspberry"];
$fruit = array_shift($stack);
pr($fruit);

pr($stack);

function pr($param)
{
	print_r($param);
}
