<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset="UTF-8"
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- For devleopment, bust cache -->
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<?php 
		function bustCache() {
			echo "?";
			echo time();
		}
	?>
	<!-- End development -->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/aboutigem.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/achievements.css?<?php bustCache()?>">
	<link rel="stylesheet" href="css/footer.css<?php bustCache() ?>">
	<link rel="stylesheet" href="css/header.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/navbar.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/projects.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/sponsors.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/subteams.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/team.css<?php bustCache()?>">
	<link rel="stylesheet" href="css/video.css<?php bustCache()?>">
	<?php require("html/accordion.php") ?>
	<title>Cornell iGEM</title>
</head>
<body>
	<!-- Header Section -->
	<?php //require("html/header.html"); ?>
	<!-- Navagation Bar -->
	<?php require("html/navbar.php"); ?>
	<!-- Video Section -->
	<?php require("html/video.php"); ?>

	<div class="container-fluid">
		<div class="row">
			<!-- Various Sections -->
			<?php require("html/aboutigem.php"); ?>
			<?php require("html/projects.php"); ?>
			<?php require("html/achievements.php"); ?>
			<?php //require("html/subteams.php"); ?>
			<?php require("html/team.php"); ?>
			<?php require("html/sponsors.php"); ?>
		</div>
	</div>
	<!-- Footer Section -->
	<?php require("html/footer.php"); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/script.js<?php bustCache()?>"></script>
	<script src="js/team.js<?php bustCache()?>"></script>
	<script src="js/smoothscroll.js<?php bustCache()?>"></script>
</body>
</html