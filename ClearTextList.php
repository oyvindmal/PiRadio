<?php
include("RadioStations.php");

foreach($decodedStations as $station) 
{
	echo $station->ID;
	echo " - ";
	echo $station->Title;
	echo "\r\n";
}


function AddLeadingZeros($input)
{
$number = $input;


}
?>
