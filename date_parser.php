<?php

$str = "2016-01-01 12:17:18 Seoul (10)"; 

$current_date = ""; 


if( preg_match("/^\d{4}-\d{2}-\d{2}/", $str, $matches)) {
	$current_date = $matches[0];
}



echo $current_date;

echo "<br />"; 

$meata_data = explode(" ", $str);

for ($i = 0; $i < count($meata_data); $i++) {
	echo $meata_data[$i] . "<br />";
}
