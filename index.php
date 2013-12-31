<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script language="javascript">
$(document).ready(
	function () 
	{ 
		LoadNowPlaying();
		LoadStationList();
		
		$("#btnStop").click(
		function ()
		{
			$.getJSON("Api/Stop.php",
			function () 
			{
				
			});
		});
		
		$("#btnPlay").click(
                function ()
                {
                        $.getJSON("Api/Play.php",
                        function ()
                        {

                        });
                });

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

	function LoadStationList()
	{
		$.getJSON( "Api/RadioStations.php",
		function (data)
		{
			var output = $("#stationsBox");
			$(data).each(
			function () 
			{
				var id = this.ID;
				var a = $("<a>").click(
				function () 
				{
					var apiurl = "Api/ChangeStation.php?id=" + id;
					$.getJSON( apiurl,
					function(data) 
					{	
						LoadNowPlaying();
						console.log("changed");
					});
					
				});
				a.html(this.Title);
				
				a.appendTo(output);
				
			});
			
			console.log(output);
//			$("#stationsBox").html(output);
		});
	}
</script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<div id="meta">
<a href="Admin/index.php">Admin</a>
</div>
<div id="box">
	<div id="heading">
		<h1>PiRadio</h1>
	</div>
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
	<div id="controlsBox">
		<a id="btnPlay">Play</a>
	        <a id="btnStop">Stop</a>
                
	</div>
	<div id="stationsBox">
	</div>

</div>

