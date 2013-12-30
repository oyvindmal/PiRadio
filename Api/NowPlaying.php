<?php
exec("sh /var/www/PiRadio/RadioScripts/Title.sh | tee /var/www/PiRadio/Data/NowPlaying");
$file = file_get_contents("/var/www/PiRadio/Data/NowPlaying");
$arr = explode("get_title", $file);
echo $arr[1];
echo JSONify($arr[1]);

function JSONify($input) 
{
	str_replace("\r\n", $input);

	$stream->Title = $input;
	return $input;
//	return json_encode($stream);
}

?>
