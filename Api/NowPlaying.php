<?php
$file = file_get_contents("http://192.168.1.190:8080/requests/status.xml");

$xml = new SimpleXMLElement($file);
$station->Name = "";
$station->NowPlaying = "";
foreach($xml->information->category[0]->info as $val) {
	$attr = $val['name'];
	if($attr == "title") 
	{
		$station->Name = (string) $val;
	}

	if($attr == "now_playing") 
	{
		$station->NowPlaying = (string)  $val;
	}
}

echo json_encode($station);
?>
