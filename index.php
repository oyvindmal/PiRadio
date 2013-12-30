<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script language="javascript">
$(document).ready(
	function () 
	{ 
		LoadNowPlaying();
		setInterval(
		function () 
			{ 
				LoadNowPlaying(); 
			}, 2000)});

	function LoadNowPlaying () 
	{
		$.getJSON( "Api/NowPlaying.php", 
		function (data) 
		{ 
			$("#stationName").text(data.Name);
			$("#nowPlaying").text(data.NowPlaying);
		});
	}
</script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<h1>PiRadio</h1>
<div id="metaData">
	<div id="stationImage">
		<img src="img/nopic.png">
	</div>
	<div id="stationInfo">
		<p id="stationName"></p>
		<p id="nowPlaying"></p>
	</div>
	<div style="clear:both;"></div>
</div>
<ul id="playerControls">
	<li><a href="Play.php">Play</a></li>
	<li><a href="Stop.php">Stop</a></li>
</ul>

<ul id="stationList">
<?php
	include("RadioStations.php");
	foreach($decodedStations as $station) 
	{
		echo "<li>";
		echo "<p><a href=\"ChangeStation.php?id=" . $station->ID  . "\">" . $station->Title . "</a></p>";
		echo "</li>";
	}		
?>
</ul>
<h2>Meta</h2>
<ul>
	<li><a href="admin/index.php">Admin</a></li>
</ul>

