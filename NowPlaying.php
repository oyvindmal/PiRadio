<?php
$file = file_get_contents("http://192.168.1.190:8080/requests/status.xml");

$xml = new SimpleXMLElement($file);
$stationName = "";
$stationNowPlaying = "";
foreach($xml->information->category[0]->info as $val) {
	$attr = $val['name'];
	if($attr == "title") 
	{
		$stationName = $val;
	}

	if($attr == "now_playing") 
	{
		$stationNowPlaying = $val;
	}
}

echo "<p><strong>" . $stationName . "</strong></p>";
if($stationNowPlaying != "") 
{
	echo "<p>" . $stationNowPlaying . "</p>";
}
?>
