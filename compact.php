<?php
// compact - Create array containing variables and their values
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = ["city", "state"];

$result = compact(explode(" ", "event nothing_here"), $location_vars);
print_r($result);
