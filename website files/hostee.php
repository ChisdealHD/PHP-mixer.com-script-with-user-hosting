<?php 
    //grabs the parameters of the url ?user=
    $url = "https://beam.pro/api/v1/channels/ChisdealHD";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $beamid = $json['id'];
	$host1 = $json['hosteeId'];
	$host = $json['hosteeId'] == true ? $host1 : $beamid; 
    $beamurl = "https://beam.pro/api/v1/channels/" . $host1;
    $content123 = file_get_contents($beamurl);
    $json123 = json_decode($content123, true);
    $hostname = $json123['token'];
	$nameshow = $json123['online'] == true ? $hostname : 'Not HOSTING! </3';
?>