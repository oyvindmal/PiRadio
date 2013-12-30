<?php
$stationID = $_GET['id'];
if(is_numeric($stationID)) 
{
	include("RadioStations.php");
	foreach($decodedStations as $station) 
	{
		if($station->ID == $stationID) 
		{
			exec("sh /var/www/PiRadio/RadioScripts/ChangeChannel.sh " . $station->URL);
			break;
		}
	}
}
header("Location: index.php");
?>
