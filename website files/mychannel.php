<?php 
    //grabs the parameters of the url ?user=
    $url = "https://beam.pro/api/v1/channels/ChisdealHD";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $follows = $json['numFollowers'];
    $title = $json['name'];
    $name = $json['token'];
    $live = $json['online'] == true ? 'Online' : 'Offline ';
    $beamid = $json['id'];
	$host1 = $json['hosteeId'];
	$host = $json['hosteeId'] == true ? $host1 : $beamid;
    $sparks = $json['user']['sparks'];
    $lvl = $json['user']['level'];
    $facebook = $json['user']['social']['facebook'];
    $twitter = $json['user']['social']['twitter'];
    $youtube = $json['user']['social']['youtube'];
    $bio = $json['user']['bio'];
    $game = $json['type']['name'];
    $Followers = " Followers";
    $url2 = "https://beam.pro/api/v1/channels/1873/hosters";
    $content2 = file_get_contents($url2);
    $json2 = json_decode($content2, true);
    $url3 = "https://beam.pro/api/v1/channels/ChisdealHD?fields=online";
    $content3 = file_get_contents($url3);
    $json3 = json_decode($content3, true);
    $hosters = count($json2);
	$url4 = "https://beam.pro/api/v1/channels/35982/recordings";
	$content4 = file_get_contents($url4);
    $json4 = json_decode($content4, true);
	$vod = count($json4);
	$vod1 = $json4['vods'][3]['baseUrl'];
?>
