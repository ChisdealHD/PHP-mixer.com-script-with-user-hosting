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

<script type="text/rocketscript">
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-53255940-1', 'auto');
		  ga('send', 'pageview');

</script> 
	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ChisdealHD LIVE!</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="https://beam.pro/<?php echo $name;?>">Live</a>
                    </li>
					<li>
                        <a href="#">Social Media!</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ChisdealHD LIVE!
                    <small>Where im Live or NOT!</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
		<h1><small><?php echo "<br>Live: $live</br>";?></small> </h1>
				<h1><small><?php echo "<br>Title: $title</br>";?></small>
                    <small><?php echo "<br>Game: $game</br>";?></small>
					<small><?php echo "<br>vod: $vod1</br>";?></small>
					</h1>
            <div class="col-md-8">
                <div class="img-responsive">
				<iframe src="https://beam.pro/embed/player/35982" width="750" height="500"></iframe>
				</div>
            </div>

            <div class="col-md-4">
                <iframe src="https://beam.pro/embed/chat/35982" width="380" height="500"></iframe>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">VOD Coming SOON!</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                    <video height="160"width="300" controls>
						<source src="" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
            </div>

            <div class="col-sm-3 col-xs-6">
                    <video height="160"width="300" controls>
						<source src="" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
            </div>

            <div class="col-sm-3 col-xs-6">
					<video height="160"width="300" controls>
						<source src="" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
            </div>

            <div class="col-sm-3 col-xs-6">
					<video height="160"width="300" controls>
						<source src="" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; live.chisdealhd.rf.gd 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
