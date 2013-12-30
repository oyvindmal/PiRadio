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
<h1>RadioControls</h1>
<h2>Currently Playing</h2>
<p id="stationName"></p>
<p id="nowPlaying"></p>
<h2>Controls</h2>
<ul>
	<li><a href="Play.php">Play</a></li>
	<li><a href="Stop.php">Stop</a></li>
</ul>


<h2>New StationsList</h2>
<ul>
<?php
	include("RadioStations.php");
	foreach($decodedStations as $station) 
	{
		echo "<li>";
		echo "<a href=\"ChangeStation.php?id=" . $station->ID  . "\">" . $station->Title . "</a>";
		echo "</li>";
	}		
?>
</ul>
<h2>Meta</h2>
<ul>
	<li><a href="admin/index.php">Admin</a></li>
</ul>

