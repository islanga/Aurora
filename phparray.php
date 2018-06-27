<?php
  $arrayData = array();
  $myfile = fopen("C:\\wamp\\www\\test\\id.csv", "r") or die("Unable to open file!");
// Output one line until end-of-file
	$array = "array (";
   while(!feof($myfile)) {
		$line = fgets($myfile);
		//print ++$cnt." ".$line."<br>";
		if(trim($line) != "0")
		{	
		  $array .= "'".trim($line)."',";
		 // print ++$cnt." ".$line."<br>";
		} 
    }
	$array = preg_replace('/ /','',$array);
	$array = substr($array,0,strlen($array)-1);
	$array .= ");";
fclose($myfile);

print_r($array);
?>