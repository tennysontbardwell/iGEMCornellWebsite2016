<a name="team" id="team" class="anchor"></a>
<script>
function getHTMLStringForBio(bioNum){
	<?php 
		$path = 'resources/team-members/team-member-bios/';
		$files = glob("$path*.{html}", GLOB_BRACE);
		$x = 0;
		foreach($files as $file) {
			echo "if (bioNum == $x) { return ";
			// echo "$file";
			$myfile = fopen($file, "r") or die("Unable to open file!");
			// $output = fread($myfile,filesize($myfile));
			$output = json_encode(file_get_contents($file));
			echo $output;
			fclose($myfile);
			// $output = readfile($file);
			// echo htmlspecialchars($output);
			echo "}\n";
			$x++;
		}
	?>
}
</script>
<div class="major-section">
	<div class="container">
		<section class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
			<h1>Our Team</h1>
		</section>
	</div>
	<div class="container">
		<?php
			$files = glob('resources/team-members/team-members-md/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
			function makeBio($num){
				echo
					"<div id='bio$num' class='collapse col-xs-12 col-sm-12 col-md-12 col-lg-12 bio-section'>
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
<script src="js/team.js<?php bustCache()?>"></script>