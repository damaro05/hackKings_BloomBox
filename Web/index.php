<!DOCTYPE HTML>
<!--
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>BloomBox | Live tracklists</title>
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

							<!-- Nav -->


						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="post.html">Post a song!</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Welcome to BloomBox.</h1>
								<p>Check what songs are being played at each stage of your favourite festivals!</p>
							</header>

							<?php
							$string = file_get_contents("/home/astray/Backend/database.json");
							$json_a = json_decode($string, true);
							$max = 3;
							$numElements  = count($json_a['songs']);

							?>

							<h3></h3>

							<h2></h2>
							<h1></h1>
							<h4></h4>
							<h2>Junction Festival</h2>


							<section class="tiles">

								<article class="style1">
									<span class="image">
										<img src="images/picTest1.jpg" alt="" />
									</span>
									<a href="mercurio.php">
										<h2>Mercurio Stage</h2>
										<div class="content"	>

											<?php
											for ($i = 0, $j = 0; $i < $numElements && $j < $max; $i++) {
												if($json_a['songs'][$i]['location'] == "Mercurio")
												{
													$j++;
													echo "<p><b>".$json_a['songs'][$i]['title']."</b></p>";
												}
											}

											?>

										</div>
									</a>
								</article>




								<article class="style2">
									<span class="image">
										<img src="images/picTest2.jpg" alt="" />
									</span>
									<a href="venus.php">
										<h2>Venus Stage</h2>
										<div class="content">
											<?php
											for ($i = 0, $j = 0; $i < $numElements && $j < $max; $i++) {
												if($json_a['songs'][$i]['location'] == "Venus")
												{
													$j++;
													echo "<p><b>".$json_a['songs'][$i]['title']."</b></p>";
												}
											}

											?>
										</div>
									</a>
								</article>


								<article class="style3">
									<span class="image">
										<img src="images/picTest3.jpg" alt="" />
									</span>
									<a href="tierra.php">
										<h2>Tierra Stage</h2>
										<div class="content">

											<?php
											for ($i = 0, $j = 0; $i < $numElements && $j < $max; $i++) {
												if($json_a['songs'][$i]['location'] == "Tierra")
												{
													$j++;
													echo "<p><b>".$json_a['songs'][$i]['title']."</b></p>";
												}
											}

											?>

										</div>
									</a>
								</article>


								<article class="style4">
									<span class="image">
										<img src="images/picTest4.jpg" alt="" />
									</span>
									<a href="marte.php">
										<h2>Marte Stage</h2>
										<div class="content">

											<?php
											for ($i = 0, $j = 0; $i < $numElements && $j < $max; $i++) {
												if($json_a['songs'][$i]['location'] == "Marte")
												{
													$j++;
													echo "<p><b>".$json_a['songs'][$i]['title']."</b></p>";
												}
											}

											?>

										</div>
									</a>
								</article>


								<article class="style5">
									<span class="image">
										<img src="images/picTest5.jpg" alt="" />
									</span>
									<a href="jupiter.php">
										<h2>Jupiter Stage</h2>
										<div class="content">

											<?php
											for ($i = 0, $j = 0; $i < $numElements && $j < $max; $i++) {
												if($json_a['songs'][$i]['location'] == "Jupiter")
												{
													$j++;
													echo "<p><b>".$json_a['songs'][$i]['title']."</b></p>";
												}
											}

											?>


										</div>
									</a>
								</article>


								<article class="style6">
									<span class="image">
										<img src="images/picTest6.jpg" alt="" />
									</span>
									<a href="saturno.php">
										<h2>Saturno Stage</h2>
										<div class="content">


											<?php
											for ($i = 0, $j = 0; $i < $numElements && $j < $max; $i++) {
												if($json_a['songs'][$i]['location'] == "Saturno")
												{
													$j++;
													echo "<p><b>".$json_a['songs'][$i]['title']."</b></p>";
												}
											}

											?>


										</div>
									</a>
								</article>








							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>BloomBox. All rights reserved</li>
							</ul>						</div>
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
