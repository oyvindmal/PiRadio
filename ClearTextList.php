<?php
include("RadioStations.php");

foreach($decodedStations as $station) 
{
	echo AddLeadingZeros($station->ID);
	echo " - ";
	echo $station->Title;
	echo "\r\n";
}


function AddLeadingZeros($input)
{
$number = $input;
$length = strlen($number);
if($length == 1) 
{
	$number = "0" . $number;
}
return $number;
}
?>
