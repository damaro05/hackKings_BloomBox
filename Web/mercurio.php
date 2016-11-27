<!DOCTYPE HTML>
<!--
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>BloomBox | Mercurio stage</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo3.png" alt="" /></span><span class="title">BloomBox</span>
								</a>

						</div>
					</header>

          <?php
							$string = file_get_contents("/home/astray/Backend/database.json");
							$json_a = json_decode($string, true);

							$numElements  = count($json_a['songs']);

							?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Mercurio stage</h1>
							<span class="image main"><img src="images/pic13.png" alt="" /></span>
							<h3>Feliu Ventura is playing LIVE</h3>
							<h4>TRACKLIST</h4>							
              <?php
  							for ($i = 0; $i < $numElements; $i++) {
  								if($json_a['songs'][$i]['location'] == "Mercurio")
  								{
  									echo "<p>".$json_a['songs'][$i]['title']."</p>";
  								}
  							}
  
  							?>                              
                                            
                                            
                                            
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; BloomBox. All rights reserved</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
