<?php
$sub_chip  = "5F";
$tagLength = 0;
$arr_code = ["00", "9F", "5F", "DF", "F0", "F2"];
array_walk($arr_code, function($elem) use ($sub_chip, $tagLength) {
    if ($sub_chip == $elem) {

    	exit("Testing");
        return $tagLength = 4;
    }
});