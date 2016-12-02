<html>
	<head>
		<title>Vobecky Enterprises</title>
		<link rel="stylesheet" href="css/style.css">

		<!-- Favicon -->
		<link rel="icon" 
      type="image/png" 
      href="img/fav.png">
		
		<script type="text/javascript" src=" js/jquery-1.9.1.min.js"></script>		
    	<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
		<script src="js/dropdown.js"></script>

	</head>

	<body>
		<div id="container2">
			<div id="intro_header1">
				<center>
				<a href="index.php"><img src="img/logo_top.jpg" style="padding-top:50px;"></a>
			</center>
			</div>

<!-- HOMEPAGE PRIMARY NAVIGATION -->
			<div id="nav1">
					<div id="left_nav">
						<ul class="nav1">
						  <li class="nav1"><a href="construction.php">CONSTRUCTION</a></li>
						</ul>
					</div>
					<div id="bottom_logo">
					<a href="index.php"><img src='img/bottom_logo.jpg'></a>
					</div>
					<div id="right_nav1">
						<ul class="nav1">
						  <li class="nav1"><a href="logistics.php">LOGISTICS</a></li>
						</ul>
					</div>
				</div>
<!-- END PRIMARY NAVIGATION -->

				<div id="gray_header1">

				</div>

				<div id="construction">
					<!-- <a href="construction/index.html"><img src="img/construction_overlay.jpg" onmouseover="this.src='img/construction_blue.jpg'" onmouseout="this.src='img/construction_overlay.jpg'" /></a> -->
					<a href="construction.php"><video width="750" autoplay loop>
  					<source src="img/construction.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video></a>
				</div>
				<div id="logistics">
					<!-- <a href="logistics/index.html"><img src="img/logistics_overlay.jpg" onmouseover="this.src='img/logistics_blue.jpg'" onmouseout="this.src='img/logistics_overlay.jpg'" /></a>-->
					<a href="logistics.php">
					<video width="750" autoplay loop> 
  					<source src="img/logistics.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video></a>
				</div>
<?php include("footer.php"); ?>