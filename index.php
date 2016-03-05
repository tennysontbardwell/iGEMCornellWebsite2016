<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset="UTF-8"
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<title>Cornell iGEM</title>
</head>
<body>
	<!-- Header Section -->
	<?php require("html/header.html"); ?>
	<!-- Navagation Bar -->
	<?php require("html/navbar.html"); ?>
	<!-- Video Section -->
	<?php require("html/video.html"); ?>

	<div class="container-fluid">
		<div class="row">
			<!-- Various Sections -->
			<?php require("html/aboutigem.html"); ?>
			<?php require("html/projects.html"); ?>
			<?php require("html/achievements.html"); ?>
			<?php require("html/subteams.html"); ?>
			<?php require("html/team.html"); ?>
			<?php require("html/sponsors.html"); ?>		
		</div>
	</div>
	<!-- Footer Section -->
	<?php require("html/footer.html"); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html