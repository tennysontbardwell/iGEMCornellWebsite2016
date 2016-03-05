<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset="UTF-8"
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/aboutigem.css">
	<link rel="stylesheet" href="css/achievements.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/projects.css">
	<link rel="stylesheet" href="css/sponsors.css">
	<link rel="stylesheet" href="css/subteams.css">
	<link rel="stylesheet" href="css/team.css">
	<link rel="stylesheet" href="css/video.css">
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
			<?php require("html/subteams.php"); ?>
			<?php require("html/team.php"); ?>
			<?php require("html/sponsors.php"); ?>		
		</div>
	</div>
	<!-- Footer Section -->
	<?php require("html/footer.php"); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html