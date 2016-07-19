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
<div class="wrapper">
<section id="team" class="section-header-javascriptTarget">
	<h2>Our Team</h2>
</section>
</div>
<div class="container">
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
					<div class='col-md-2 col-lg-2 col-sm-2 col-xs-2'>
						<div class='team-member'>
							<div class='team-member-mouseover-box'>
							</div>
							<img id='photo$x' class='img-responsive team-member-photo' src=$file>
						</div>
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
<script src="js/team.js<?php bustCache()?>"></script>
<div style="height: 50px;"></div>
