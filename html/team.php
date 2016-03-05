<a name="team"></a>
<div class="container">
	<section class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
		<h1>Our Team</h1>
	</section>
</div>
<div class="container">
	<?php
		$files = glob('resources/placeholders/team-members-md/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
		// $files = scandir('resources/placeholders/team_members/');
		foreach($files as $file) {
			echo 
				"<section class='col-md-2 col-lg-2 col-sm-3 col-xs-6'>
					<img class='img-responsive' src='$file'>
				</section>";
		}
	?>
</div>