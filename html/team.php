<a name="team"></a>
<div class="major-section">
	<div class="container">
		<section class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
			<h1>Our Team</h1>
<!-- 			<button type="button" class="btn btn-default" onclick="collapseAllBut()">
				Click
			</button>
 -->		
 		</section>
	</div>
	<div class="container">
<!-- 		<div data-toggle="collapse" data-target="#bio">
			<div class='col-md-2 col-lg-2 col-sm-2 col-xs-2 team-member'>
				<img class='img-responsive' src='resources/placeholders/team-members-md/Arun.jpg'>
			</div>
		</div>
		<div id="bio" class="collapse col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1> hello!!!! hello!!!! hello!!!! hello!!!! hello!!!! </h1>
		</div> -->
		<?php
			$files = glob('resources/placeholders/team-members-md/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
			function makeBio($num){
				echo
					"<div id='bio$num' class='collapse col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						<h1> hello!!!! hello!!!! hello!!!! hello!!!! hello!!!! </h1>
					</div>";
			}
			$x = 0;
			foreach($files as $file) {
				$y = floor($x / 6);
				echo
					"<div onclick='collapseAllBut($x)'>
						<div class='col-md-2 col-lg-2 col-sm-2 col-xs-2 team-member'>
							<img id='photo$x' class='img-responsive' src=$file>
						</div>
					</div>";
				if ($x % 6 == 5) {
					makeBio($y);
				}
				$x = $x + 1;
			}
			if ($x % 6 != 5) {
				makeBio($y);
			}
		?>
	</div>
</div>