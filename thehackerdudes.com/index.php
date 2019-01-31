<?php
	require_once("assets/php/compilation.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>thehackerdudes</title>

	<link rel="icon" href="assets/images/site-icon.png">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Noticia+Text' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Anonymous+Pro' rel='stylesheet'>

	<!-- call everything!!! -->
	<!-- jQuery -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Javascript custom -->
	<script src="assets/js/typewriter.js"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-1397368680841309",
		    enable_page_level_ads: true
		});
	</script>

	<!-- Core Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">

	<!-- font awesome -->
	<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- custom css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/jai-hollow.css">
	<link rel="stylesheet" href="assets/css/essentials.css" type="text/css">
	<link rel="stylesheet" href="assets/css/layout.css" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div class="container-fluid ip-wrapper">
		<div class="content">
			<div class="ip-text">
			Your IP: <?php echo $ip.$status; ?>
			</div>
		</div>
	</div>
	<div class="container-fluid welcome-div">
		<div class="content">

			<div class="welcome-wrapper">
				<h1 class="welcome-text">Hi <span class="ip"><?php echo $ip; ?></span>! Welcome to
					<div class="line-1 anim-typewriter hackerdudes-text">thehackerdudes.com
					</div>
				</h1>
			</div>

			<div class="content ip">

				<h3>Are you lost?</h3>

				<div class="row">

					<div class="col-lg-4 col-md-5 col-sm-3 col-xs-2 ip-label">
						<p>Host:</p>
						<p>Location:</p>
						<p>City:</p>
						<p>Organization:</p>
						<p>Region:</p>

						<p>Updated:</p>
						<p>UpdatedISO:</p>
						<p>Disclaimer:</p><br><br><br>
						<p>chartName:</p>
						<p>code:</p>
						<p>symbol:</p>
						<p>rate:</p>
						<p>description:</p>

					</div>
					<div class="col-lg-8 col-md-7 col-sm-9 col-xs-10 ip-details">
						<p><?php echo $hostname; ?></p>
						<p><?php echo $loc; ?></p>
						<p><?php echo $city; ?></p>
						<p><?php echo $org; ?></p>
						<p><?php echo $region; ?></p>
						<p><?php echo $postal; ?></p>
						
						<p><?php echo $updated; ?></p>
						<p><?php echo $updatediso; ?></p>
						<p><?php echo $disclaimer; ?></p>
						<p><?php echo $chartName; ?></p>
						<p><?php echo $code; ?></p>
						<p><?php echo $symbol; ?></p>
						<p><?php echo $rate; ?></p>
						<p><?php echo $description; ?></p>
						<bR><br>
						<p><?php print_r($coindesk); ?></p>
					</div>

				</div>

				<!--FOR CELLPHONE CODE

				<div class="row cp">
				</div>
				

				-->

				
			</div>

		</div>
		</div>
	</div>
	<div class="r-div">
		
	</div>
</body>
</html>
<?php mysqli_close($connection); ?>