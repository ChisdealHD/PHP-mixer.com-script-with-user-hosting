<?php 
    //grabs the parameters of the url ?user=
    $url = "https://mixer.com/api/v1/channels/ChisdealHD";
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
    $url2 = "https://mixer.com/api/v1/channels/1873/hosters";
    $content2 = file_get_contents($url2);
    $json2 = json_decode($content2, true);
    $url3 = "https://mixer.com/api/v1/channels/ChisdealHD?fields=online";
    $content3 = file_get_contents($url3);
    $json3 = json_decode($content3, true);
    $hosters = count($json2);
	$url4 = "https://mixer.com/api/v1/channels/35982/recordings";
	$content4 = file_get_contents($url4);
    $json4 = json_decode($content4, true);
	$vod = count($json4);
	$vod1 = $json4['vods'][3]['baseUrl'];
?>

<?php 
    //grabs the parameters of the url ?user=
    $beamurl = "https://mixer.com/api/v1/channels/" . $host1;
    $content123 = file_get_contents($beamurl);
    $json123 = json_decode($content123, true);
    $hosteename = $json123['token'];
    $beamid1 = $json123['id'];
	$nameshow = $json123['online'] == true ? $hosteename : 'Not HOSTING! </3';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ChisdealHD LIVE PAGE!!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
window.setInterval("reloadIFrame();", 600000);

function reloadIFrame() {
 document.frames["Refresh"].location.reload();
}
</script> 
	
</head>

<body>
    <meta http-equiv="refresh" content="30">
	<center><h2><b><small id="Refresh"><font Color="white"><?php echo "<br>Hosting!: $nameshow</br>";?></font></small></b> </h2></center>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
