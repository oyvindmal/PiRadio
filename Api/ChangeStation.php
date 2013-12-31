<?php
$stationID = $_GET['id'];
$json = file_get_contents("../Data/RadioStations.json");

$decodedStations = json_decode($json);
if(is_numeric($stationID)) 
{
	
	
	foreach($decodedStations as $station) 
	{
		if($station->ID == $stationID) 
		{
			$temp2 = file_get_contents("http://127.0.0.1:8080/requests/status.xml?command=pl_empty");
			$temp = file_get_contents("http://127.0.0.1:8080/requests/status.xml?command=in_play&input=" . $station->URL);
			break;
		}
	}
}


$response->Status = "OK";
echo json_encode($response);
?>
