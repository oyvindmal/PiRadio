<h1>RadioControls</h1>

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
